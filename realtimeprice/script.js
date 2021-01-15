
    $(document).ready(function () {
        $("#reset").click(function (e) {
            location.reload();
        });
  
        $("#loadButton").click(function (e) {
            $("#tempDiv").load("https://api.data.gov.in/resource/9ef84268-d588-465a-a308-a864a43d0070?api-key=579b464db66ec23bdd000001cdd3946e44ce4aad7209ff7b23ac571b&format=xml&offset=0&limit=11", function (response, status, xhr) {
                if (status != "error") {
                    /*Hiding the loading image*/
                    $("#loadingImg").hide();
                    /*End*/
  
                    DisplayXML(1);
                }
            });
  
            /*Showing the loading image*/
            $("#loadingImg").show();
            /*End*/
  
        });
  
        function DisplayXML(pageNo) {
            var xmlDoc = $.parseXML($("#tempDiv").html());
            var xml = $(xmlDoc);
            var nodeName = xml.find("*").eq(1)[0].nodeName;
            var nodes = xml.find(nodeName);
  
            var pageSize = 5;
            totalRecords = nodes.length;
  
            /*Table Header*/
            var table = $("<table>");
            var tr = $("<tr>");
            $.each($(nodes[0]).find("*"), function (index, value) {
                var th = $("<th>");
                th.append(value.nodeName);
                tr.append(th);
            });
            table.append(tr);
            /*End*/
  
            /*Table Data*/
            for (i = (pageNo - 1) * pageSize; i < (pageNo * pageSize) ; i++) {
                var tr = $("<tr>");
                var child = $(nodes[i]).find("*");
  
                $.each(child, function (index, value) {
                    var td = $("<td>");
                    td.append($(value).text());
                    tr.append(td);
                });
  
                table.append(tr);
            }
            /*End*/
  
            $("#resultDiv").html(table);
  
            /*Paging*/
            var result = Paging(pageNo, 5, totalRecords, "myClass", "myDisableClass");
            $("#pagingDiv").html(result)
            /*Paging*/
        }
  
        $("#pagingDiv").on("click", "a", function () {
            DisplayXML($(this).attr("pn"));
        });
  
        function Paging(PageNumber, PageSize, TotalRecords, ClassName, DisableClassName) {
            var ReturnValue = "";
  
            var TotalPages = Math.ceil(TotalRecords / PageSize);
            if (+PageNumber > 1) {
                if (+PageNumber == 2)
                    ReturnValue = ReturnValue + "<a pn='" + (+PageNumber - 1) + "' class='" + ClassName + "'>Previous</a>   ";
                else {
                    ReturnValue = ReturnValue + "<a pn='";
                    ReturnValue = ReturnValue + (+PageNumber - 1) + "' class='" + ClassName + "'>Previous</a>   ";
                }
            }
            else
                ReturnValue = ReturnValue + "<span class='" + DisableClassName + "'>Previous</span>   ";
            if ((+PageNumber - 3) > 1)
                ReturnValue = ReturnValue + "<a pn='1' class='" + ClassName + "'>1</a> ..... | ";
            for (var i = +PageNumber - 3; i <= +PageNumber; i++)
                if (i >= 1) {
                    if (+PageNumber != i) {
                        ReturnValue = ReturnValue + "<a pn='";
                        ReturnValue = ReturnValue + i + "' class='" + ClassName + "'>" + i + "</a> | ";
                    }
                    else {
                        ReturnValue = ReturnValue + "<span style='font-weight:bold;'>" + i + "</span> | ";
                    }
                }
            for (var i = +PageNumber + 1; i <= +PageNumber + 3; i++)
                if (i <= TotalPages) {
                    if (+PageNumber != i) {
                        ReturnValue = ReturnValue + "<a pn='";
                        ReturnValue = ReturnValue + i + "' class='" + ClassName + "'>" + i + "</a> | ";
                    }
                    else {
                        ReturnValue = ReturnValue + "<span style='font-weight:bold;'>" + i + "</span> | ";
                    }
                }
            if ((+PageNumber + 3) < TotalPages) {
                ReturnValue = ReturnValue + "..... <a pn='";
                ReturnValue = ReturnValue + TotalPages + "' class='" + ClassName + "'>" + TotalPages + "</a>";
            }
            if (+PageNumber < TotalPages) {
                ReturnValue = ReturnValue + "   <a pn='";
                ReturnValue = ReturnValue + (+PageNumber + 1) + "' class='" + ClassName + "'>Next</a>";
            }
            else
                ReturnValue = ReturnValue + "   <span class='" + DisableClassName + "'>Next</span>";
  
            return (ReturnValue);
        }
  
    });