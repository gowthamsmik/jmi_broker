<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--**********************************************pagination********************************************-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!--*******************************************Select*****************************************************-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}
#searchNSel
{
  display:flex;
  justify-content: space-between;
  max-width:1200px;
  width:100%;
  margin: 0px auto;
}

#selectedVal
{
  width: 70px;
  float: right;
  border: 1px solid #eeeff3;
}

.input-group-text
{
  background-color: white;
  border: none;
  padding: 7px;
  padding-right:0px;
}
.input-group-text img
{
  width: 20px;
}
.input-group input
{
  border: none;
  color:#b0b1b3;
  width: calc(100% - 30px) !important;
}
.input-group input::placeholder
{
  color:#c0c0c0;
  font-family: Roboto-Light;
}
.input-group input:focus
{
  box-shadow:none;
}
.input-group:focus-within
{
  border: 1px solid #f4a8ca;
}
.input-group
{
  border: 1px solid #eeeff3;
  border-radius: 5px;
  width:50%;
  max-width: 300px;
  margin: 2px;
}
.form-control
{
  box-shadow: none;
}
.parSelectedVal
{
  max-width: 70px;
  border-radius: 3px;
  margin-top: 3px;
}
.input-group-prepend
{
    float: left !important;
}
.serCol
{
  width:90%;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  min-width: 950px;
  max-width:1200px;
  border: 1px solid #ddd;
  font-size: 18px;
  margin: 0px auto;
}

#myTable th, #myTable .search td {
  text-align: left;
  padding: 12px;
  width: 20% !important;
  font-family: Roboto-Light;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover
{
  background-color: #f1f1f1;
}
th
{
  cursor: pointer;
  background-color: #ffc926;
  color: white;
  font-weight: normal;
  width: 25% !important;
}
tr:hover
{
  background-color: white !important;
}
.search:hover
{
  background-color: #f8f8f8 !important;
}
#searchNSel .search:hover
{
    background-color: white !important;
}
.firstArrowImg , .secondArrowImg , .thirdArrowImg , .fourthArrowImg
{
  width: 15px;
  display: none;
}
.collapsible
{
  padding: 1px 6px 0px 6px;
  border:1px solid #e8e9ea;
  background-color: #fbfcfd;
  border-radius: 5px;
  outline: none !important;
}

.add:after
{
  content: url("/assets/m/img/plus.png");
}
.remove:after
{
  content: url("/assets/m/img/remove.png");
}
td p
{
  font-size: 12px;
  background-color: #fffbf1;
  margin: 0px;
  padding: 7px 15px;
  border-bottom: 1px solid #ebeef5;
  font-family: Roboto-Light;
}
td p span
{
  font-weight: bold;
}
.white
{
  font-size: 15px;
  background-color: white;
}
/**********************************************pagination*********************************************/
#pagList
{
  justify-content: center;
  display: flex;
  margin-top:20px;
}
#pagList li
{


	margin:5px;

}
#pagList li a:hover
{
	text-decoration:none;
}
#pagList li.active
{
	background-color:#ffc926;
}
#pagList li.active a{color:white;}
.pagination>.active>a
{
  background-color:#ffc926 !important;
  border-color:white !important;
}
#pagList li *
{
	color:black;
}
.show
{
    display: table-row !important;
}
@media only screen and (max-width: 837px)
{
  #myTable
  {
    width: 100%;
    min-width: 935px;
    max-width: 935px;
  }
  .pagination>li>a, .pagination>li>span
  {
    padding: 4px 9px;
  }
  #myTable th, #myTable .search td , .input-group input::placeholder
  {
    font-size: 15px;
  }
  .collapsible
  {
    padding: 1px 3px 0px 3px;
  }
}

@media only screen and (max-width: 550px)
{
  #pagList
  {
    width: fit-content;
  }
}
@media only screen and (max-width: 500px)
{
  .input-group input::placeholder
  {
    font-size: 11px !important;
  }
  .search
  {
    padding: 0px;
    width:110px;
  }
  .input-group-text
  {
    padding: 5px 0px 5px 5px;
  }
  .form-control
  {
    height: 30px;
    padding: 4px;
  }

  #myTable
  {
    width: 100%;
    min-width: 850px;
    max-width: 850px;
  }
  #myTable th, #myTable .search td , .input-group input::placeholder
  {
    font-size: 13px;
  }
  .collapsible
  {
    padding: 1px 2px 0px 2px;
  }
  td p
  {
    font-size: 11px;
  }
}

</style>
</head>
<body>
<div id="searchNSel">
  <div class="input-group mb-3 search">
    <div class="input-group-prepend">
      <span class="input-group-text"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTUwOC44NzUsNDkzLjc5MkwzNTMuMDg5LDMzOC4wMDVjMzIuMzU4LTM1LjkyNyw1Mi4yNDUtODMuMjk2LDUyLjI0NS0xMzUuMzM5QzQwNS4zMzMsOTAuOTE3LDMxNC40MTcsMCwyMDIuNjY3LDAgICAgUzAsOTAuOTE3LDAsMjAyLjY2N3M5MC45MTcsMjAyLjY2NywyMDIuNjY3LDIwMi42NjdjNTIuMDQzLDAsOTkuNDExLTE5Ljg4NywxMzUuMzM5LTUyLjI0NWwxNTUuNzg2LDE1NS43ODYgICAgYzIuMDgzLDIuMDgzLDQuODEzLDMuMTI1LDcuNTQyLDMuMTI1YzIuNzI5LDAsNS40NTgtMS4wNDIsNy41NDItMy4xMjVDNTEzLjA0Miw1MDQuNzA4LDUxMy4wNDIsNDk3Ljk1OCw1MDguODc1LDQ5My43OTJ6ICAgICBNMjAyLjY2NywzODRjLTk5Ljk3OSwwLTE4MS4zMzMtODEuMzQ0LTE4MS4zMzMtMTgxLjMzM1MxMDIuNjg4LDIxLjMzMywyMDIuNjY3LDIxLjMzM1MzODQsMTAyLjY3NywzODQsMjAyLjY2NyAgICBTMzAyLjY0NiwzODQsMjAyLjY2NywzODR6IiBmaWxsPSIjZDNkY2U2IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPC9nPjwvc3ZnPg==" /></span>
    </div>
    <input type="text" id="searchTable" placeholder="Search table" class="form-control">
  </div>
  <div class="mb-3 parSelectedVal">
    <select  class="form-control" id="selectedVal">
      <option value="25">25</option>
      <option value="50">50</option>
      <option value="75">75</option>
      <option value="100">100</option>
    </select>
  </div>
</div>
<table id="myTable">
  <tr class="header">
    <th onclick="sortByCol(0)">
      <img class="firstArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="firstArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Symbol
    </th>
    <th onclick="sortByCol(1)">
      <img class="secondArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="secondArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Name
    </th>
    <th onclick="sortByCol(2)">
      <img class="thirdArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="thirdArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Margin %
    </th>
    <th onclick="sortByCol(3)">
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Contract Size
    </th>
    <th onclick="sortByCol(4)">
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Tick Size
    </th>
  </tr>
  <tr>
    <td>
      <div class="input-group serCol">
        <input type="text" id="firstCol" onkeyup="searchByCol(0 , 'firstCol')" placeholder="Symbol" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="secondCol" onkeyup="searchByCol(1 , 'secondCol')" placeholder="Name" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="thirdCol" onkeyup="searchByCol(2 , 'thirdCol')" placeholder="Margin" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="fourthCol" onkeyup="searchByCol(3 , 'fourthCol')" placeholder="Contract Size" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="fifthCol" onkeyup="searchByCol(4 , 'fifthCol')" placeholder="Tick Size" class="form-control">
      </div>
    </td>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo1">
      </button>
      A
    </td>
    <td>A </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo1" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo2">
      </button>
      AA
    </td>
    <td>AA </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo2" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo3">
      </button>
      AAON.O
    </td>
    <td> AAON.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo3" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo4">
      </button>
       ABC
    </td>
    <td>  ABC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo4" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo5">
      </button>
      ABM
    </td>
    <td> ABM</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo5" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo6">
      </button>
      ABT
    </td>
    <td>ABT </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo6" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo7">
      </button>
       ACHC.O
    </td>
    <td> ACHC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo7" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo8">
      </button>
      ACM
    </td>
    <td> ACM</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo8" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo9">
      </button>
      ADBE.O
    </td>
    <td> ADBE.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo9" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo10">
      </button>
      ADI.O
    </td>
    <td> ADI.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo10" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo11">
      </button>
      ADM
    </td>
    <td> ADM</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo11" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo12">
      </button>
      ADSK.O
    </td>
    <td>ADSK.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo12" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo13">
      </button>
      AEIS.O
    </td>
    <td>AEIS.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo13" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo14">
      </button>
      AEO
    </td>
    <td>AEO </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo14" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo15">
      </button>
      AGCO.K
    </td>
    <td> AGCO.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo15" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo16">
      </button>
      AGR
    </td>
    <td> AGR</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo16" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo17">
      </button>
      AKAM.O
    </td>
    <td>AKAM.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo17" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo18">
      </button>
      ALB
    </td>
    <td>ALB </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo18" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo19">
      </button>
      ALE
    </td>
    <td> ALE</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo19" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo20">
      </button>
      ALGN.O
    </td>
    <td> ALGN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo20" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo21">
      </button>
      AMAZON
    </td>
    <td> AMAZON_CFD</td>
    <td>8% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo21" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>100</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>8%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo22">
      </button>
      AMED.O
    </td>
    <td>AMED.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo22" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo23">
      </button>
      AMEH.O
    </td>
    <td>AMEH.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo23" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo24">
      </button>
      AMKR.O
    </td>
    <td> AMKR.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo24" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo25">
      </button>
      AMRC.K
    </td>
    <td>AMRC.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo25" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo26">
      </button>
      ANSS.O
    </td>
    <td> ANSS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo26" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo27">
      </button>
      AOS
    </td>
    <td>AOS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo27" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo28">
      </button>
      APD
    </td>
    <td>APD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo28" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo29">
      </button>
      APPLE_CFD
    </td>
    <td> APPLE_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo29" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo30">
      </button>
      APPS.O
    </td>
    <td>APPS.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo30" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo31">
      </button>
      ASGN.K
    </td>
    <td>ASGN.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo31" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo32">
      </button>
      AT&T_CFD
    </td>
    <td>AT&T_CFD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo32" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo33">
      </button>
      ATRC.O
    </td>
    <td> ATRC.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo33" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo34">
      </button>
       AWR
    </td>
    <td> AWR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo34" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo35">
      </button>
      BABA_CFD
    </td>
    <td> BABA_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo35" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>3</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo36">
      </button>
      BABA_CFD
    </td>
    <td> BABA_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo36" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>3</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo37">
      </button>
       BAX
    </td>
    <td> BAX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo37" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo38">
      </button>
      BC
    </td>
    <td> BC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo38" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo39">
      </button>
       BCPC.O
    </td>
    <td> BCPC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo39" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo40">
      </button>
      BFAM.K
    </td>
    <td>BFAM.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo40" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo41">
      </button>
       BG
    </td>
    <td>  BG</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo41" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo42">
      </button>
      BIIB.O
    </td>
    <td>BIIB.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo42" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo43">
      </button>
      BKR
    </td>
    <td>BKR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo43" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo44">
      </button>
         BIO
    </td>
    <td> BIO </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo44" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo45">
      </button>
      BLDR.K
    </td>
    <td>BLDR.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo45" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo46">
      </button>
      BLKB.O
    </td>
    <td> BLKB.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo46" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo47">
      </button>
      BMRN.O
    </td>
    <td> BMRN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo47" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo48">
      </button>
      BOEING_CFD
    </td>
    <td>BOEING_CFD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo48" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>20</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo49">
      </button>
      BRKR.O
    </td>
    <td> BRKR.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo49" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo50">
      </button>
      BRKS.O
    </td>
    <td> BRKS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo50" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo51">
      </button>
      BSX
    </td>
    <td> BSX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo51" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo52">
      </button>
      BURL.K
    </td>
    <td> BURL.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo52" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo53">
      </button>
      BWA
    </td>
    <td> BWA</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo53" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo54">
      </button>
       CAH
    </td>
    <td>  CAH</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo54" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo55">
      </button>
      CDAY.K
    </td>
    <td> CDAY.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo55" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo56">
      </button>
      CDNS.O
    </td>
    <td> CDNS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo56" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo57">
      </button>
      CELH.O
    </td>
    <td> CELH.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo57" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo58">
      </button>
      CERN.O
    </td>
    <td>CERN.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo58" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search59">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo59">
      </button>
      CF
    </td>
    <td> CF</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo59" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo60">
      </button>
      CFX
    </td>
    <td> CFX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo60" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo61">
      </button>
       CGNX.O
    </td>
    <td>  CGNX.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo61" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo62">
      </button>
      CHD
    </td>
    <td> CHD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo62" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo63">
      </button>
       CHE
    </td>
    <td>  CHE</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo63" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo64">
      </button>
      CHK.O
    </td>
    <td> CHK.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo64" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo65">
      </button>
      CHX.O
    </td>
    <td>CHX.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo65" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo66">
      </button>
      CL.CD
    </td>
    <td>CL.CD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo66" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo67">
      </button>
      CLDR.K
    </td>
    <td>CLDR.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo67" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo68">
      </button>
      CLF
    </td>
    <td>CLF </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo68" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo69">
      </button>
      CMC
    </td>
    <td> CMC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo69" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo70">
      </button>
      CMI
    </td>
    <td>CMI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo70" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo71">
      </button>
      COG
    </td>
    <td>COG </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo71" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo72">
      </button>
       COHR.O
    </td>
    <td> COHR.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo72" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo73">
      </button>
      COKE.O
    </td>
    <td>COKE.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo73" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo74">
      </button>
      COLM.O
    </td>
    <td> COLM.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo74" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo75">
      </button>
      COO
    </td>
    <td>COO </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo75" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo76">
      </button>
      COP
    </td>
    <td> COP</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo76" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo77">
      </button>
       CRM
    </td>
    <td> CRM </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo77" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo78">
      </button>
      CTAS.O
    </td>
    <td> CTAS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo78" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo79">
      </button>
      CTSH.O
    </td>
    <td>CTSH.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo79" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo80">
      </button>
       CUZ
    </td>
    <td> CUZ </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo80" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo81">
      </button>
      CVET.O
    </td>
    <td>CVET.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo81" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo82">
      </button>
      CVS
    </td>
    <td>CVS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo82" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo83">
      </button>
      CVS
    </td>
    <td>CVS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo83" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo84">
      </button>
      CVX
    </td>
    <td>CVX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo84" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo85">
      </button>
      DAN
    </td>
    <td> DAN</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo85" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo86">
      </button>
      DD
    </td>
    <td>DD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo86" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo87">
      </button>
      DDS
    </td>
    <td> DDS</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo87" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo88">
      </button>
      DEN
    </td>
    <td>DEN </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo88" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo89">
      </button>
      DG
    </td>
    <td>DG </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo89" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo90">
      </button>
      DGX
    </td>
    <td>DGX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo90" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo91">
      </button>
      DHI
    </td>
    <td>DHI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo91" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo92">
      </button>
      DHR
    </td>
    <td> DHR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo92" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo93">
      </button>
      DHR
    </td>
    <td>DHR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo93" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo94">
      </button>
      DIOD.O
    </td>
    <td> DIOD.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo94" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo95">
      </button>
      DLTR.O
    </td>
    <td> DLTR.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo95" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo96">
      </button>
      DOCU.O
    </td>
    <td> DOCU.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo96" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo97">
      </button>
      DORM.O
    </td>
    <td> DORM.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo97" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo98">
      </button>
      DOV
    </td>
    <td> DOV </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo98" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo99">
      </button>
      DOW
    </td>
    <td> DOW </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo99" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo100">
      </button>
      EBAY_CFD
    </td>
    <td> EBAY_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo100" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo101">
      </button>
      EBS
    </td>
    <td> EBS</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo101" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo102">
      </button>
      EL
    </td>
    <td> EL</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo102" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo103">
      </button>
      ELY
    </td>
    <td> ELY </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo103" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo104">
      </button>
      EMR
    </td>
    <td>EMR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo104" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo105">
      </button>
      ENSG.O
    </td>
    <td> ENSG.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo105" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo106">
      </button>
      EOG
    </td>
    <td>EOG </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo106" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo107">
      </button>
      EW
    </td>
    <td>EW </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo107" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo108">
      </button>
      EXAS.O
    </td>
    <td> EXAS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo108" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr><tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo109">
      </button>
      EXC.O
    </td>
    <td> EXC.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo109" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo110">
      </button>
      FAST.O
    </td>
    <td> FAST.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo110" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo111">
      </button>
      FCBOOK_CFD
    </td>
    <td> FCBOOK_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo111" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo112">
      </button>
      FELE.O
    </td>
    <td> FELE.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo112" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo113">
      </button>
      FELE.O
    </td>
    <td>FELE.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo113" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo114">
      </button>
      FFIV.O
    </td>
    <td> FFIV.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo114" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo115">
      </button>
      FIZZ.O
    </td>
    <td> FIZZ.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo115" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo116">
      </button>
      FL
    </td>
    <td> FL</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo116" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo117">
      </button>
      FLO
    </td>
    <td> FLO</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo117" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo118">
      </button>
      FLOW.K
    </td>
    <td>FLOW.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo118" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo119">
      </button>
      FLS
    </td>
    <td> FLS</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo119" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo120">
      </button>
      FOXF.O
    </td>
    <td> FOXF.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo120" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo121">
      </button>
      FSLR.O
    </td>
    <td>FSLR.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo121" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo122">
      </button>
      FTV
    </td>
    <td> FTV</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo122" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo123">
      </button>
      GGG
    </td>
    <td> GGG </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo123" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo124">
      </button>
      GMED.K
    </td>
    <td> GMED.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo124" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo125">
      </button>
      GOLF.K
    </td>
    <td> GOLF.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo125" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo126">
      </button>
      GPC
    </td>
    <td> GPC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo126" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo127">
      </button>
      GPS
    </td>
    <td> GPS</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo127" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo128">
      </button>
      GTII.CD
    </td>
    <td> GTII.CD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo128" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo129">
      </button>
      GTLS.K
    </td>
    <td> GTLS.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo129" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo130">
      </button>
      HAE
    </td>
    <td> HAE</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo130" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo131">
      </button>
      HAIN.O
    </td>
    <td> HAIN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo131" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo132">
      </button>
      HFC
    </td>
    <td> HFC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo132" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo133">
      </button>
      HI
    </td>
    <td> HI</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo133" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo134">
      </button>
      HL
    </td>
    <td>HL </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo134" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo135">
      </button>
      HP
    </td>
    <td> HP</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo135" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo136">
      </button>
      HSIC.O
    </td>
    <td>HSIC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo136" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo137">
      </button>
      HUN
    </td>
    <td> HUN</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo137" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo138">
      </button>
      ICUI.O
    </td>
    <td> ICUI.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo138" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo139">
      </button>
      IDA
    </td>
    <td> IDA</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo139" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo140">
      </button>
      IDA
    </td>
    <td> IDA</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo140" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo141">
      </button>
      IEX
    </td>
    <td> IEX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo141" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo142">
      </button>
      IFF
    </td>
    <td> IFF</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo142" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo143">
      </button>
      INTU.O
    </td>
    <td> INTU.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo143" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo144">
      </button>
      IP
    </td>
    <td>IP </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo144" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo145">
      </button>
      IPG
    </td>
    <td>IPG </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo145" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo146">
      </button>
      IR
    </td>
    <td>IR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo146" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo147">
      </button>
      IT
    </td>
    <td> IT</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo147" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo148">
      </button>
      ITGR.K
    </td>
    <td>ITGR.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo148" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo149">
      </button>
      ITRI.O
    </td>
    <td>ITRI.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo149" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo150">
      </button>
      JBGS.K
    </td>
    <td> JBGS.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo150" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo151">
      </button>
      JBHT.O
    </td>
    <td> JBHT.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo151" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo152">
      </button>
      JBL
    </td>
    <td> JBL</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo152" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo153">
      </button>
      JBT
    </td>
    <td> JBT</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo153" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo154">
      </button>
      JJSF.O
    </td>
    <td> JJSF.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo154" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo155">
      </button>
      JKHY.O
    </td>
    <td> JKHY.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo155" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo156">
      </button>
      JNJ_CFD
    </td>
    <td> JNJ_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo156" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo157">
      </button>
      KBH
    </td>
    <td> KBH</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo157" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo158">
      </button>
      KDP.O
    </td>
    <td>KDP.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo158" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo159">
      </button>
      KNX
    </td>
    <td> KNX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo159" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo160">
      </button>
      KO_CFD
    </td>
    <td>KO_CFD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo160" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>6</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo161">
      </button>
      KSS
    </td>
    <td>KSS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo161" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo162">
      </button>
      KWR
    </td>
    <td> KWR</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo162" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo163">
      </button>
      LANC.O
    </td>
    <td> LANC.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo163" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo164">
      </button>
      LAWS.O
    </td>
    <td> LAWS.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo164" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo165">
      </button>
      LCII.K
    </td>
    <td>LCII.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo165" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo166">
      </button>
      LEA
    </td>
    <td> LEA</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo166" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo167">
      </button>
      LEN
    </td>
    <td> LEN</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo167" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo168">
      </button>
      LEVI.K
    </td>
    <td>LEVI.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo168" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo169">
      </button>
      LGIH.O
    </td>
    <td>LGIH.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo169" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo170">
      </button>
      LH
    </td>
    <td> LH</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo170" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo171">
      </button>
      LHCG.O
    </td>
    <td>LHCG.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo171" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo172">
      </button>
      LKQ.O
    </td>
    <td> LKQ.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo172" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo173">
      </button>
      LPX
    </td>
    <td> LPX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo173" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo174">
      </button>
      LSCC.O
    </td>
    <td> LSCC.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo174" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo175">
      </button>
      LTHM.K
    </td>
    <td> LTHM.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo175" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo176">
      </button>
      M
    </td>
    <td> M</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo176" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo177">
      </button>
      MA_CFD
    </td>
    <td> MA_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo177" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>10</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo178">
      </button>
      MCD_CFD
    </td>
    <td> MCD_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo178" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>4</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo179">
      </button>
      MCK
    </td>
    <td> MCK</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo179" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo180">
      </button>
      MDLZ.O
    </td>
    <td> MDLZ.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo180" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo181">
      </button>
      MDU
    </td>
    <td> MDU</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo181" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo182">
      </button>
      MEDP.O
    </td>
    <td> MEDP.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo182" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo183">
      </button>
      MGY
    </td>
    <td> MGY</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo183" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo184">
      </button>
      MKSI.O
    </td>
    <td>MKSI.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo184" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo185">
      </button>
      MLM
    </td>
    <td>MLM </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo185" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo">
      </button>
      MMS
    </td>
    <td>MMS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo186">
      </button>
      MMSI.O
    </td>
    <td>MMSI.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo186" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo187">
      </button>
      MNTV.O
    </td>
    <td> MNTV.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo187" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo">
      </button>
      MOS
    </td>
    <td>MOS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo189">
      </button>
      MRO
    </td>
    <td> MRO</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo189" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo190">
      </button>
      MSFT_CFD
    </td>
    <td> MSFT_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo190" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo191">
      </button>
      MSM
    </td>
    <td>MSM </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo191" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo192">
      </button>
      MTH
    </td>
    <td> MTH</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo192" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo193">
      </button>
      MUR
    </td>
    <td>MUR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo193" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo194">
      </button>
      NATI.O
    </td>
    <td> NATI.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo194" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo195">
      </button>
      NDSN.O
    </td>
    <td> NDSN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo195" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo196">
      </button>
      NEGG.O
    </td>
    <td> NEGG.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo196" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo197">
      </button>
        NEM
    </td>
    <td> NEM</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo197" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo198">
      </button>
      NEP
    </td>
    <td> NEP</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo198" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo199">
      </button>
      NSC
    </td>
    <td> NSC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo199" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo200">
      </button>
      NUE
    </td>
    <td> NUE</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo200" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo201">
      </button>
      NVTA.K
    </td>
    <td> NVTA.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo201" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo202">
      </button>
      NWSA.O
    </td>
    <td> NWSA.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo202" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo203">
      </button>
      NYT
    </td>
    <td> NYT</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo203" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo204">
      </button>
      ODFL.O
    </td>
    <td> ODFL.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo204" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo205">
      </button>
      OLLI.O
    </td>
    <td>OLLI.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo205" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo206">
      </button>
      OMC
    </td>
    <td> OMC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo206" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo207">
      </button>
      OMCL.O
    </td>
    <td>OMCL.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo207" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo208">
      </button>
      OMI
    </td>
    <td> OMI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo208" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo209">
      </button>
      ONTO.K
    </td>
    <td>ONTO.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo209" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo210">
      </button>
      PCH.O
    </td>
    <td> PCH.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo210" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo211">
      </button>
      PCTY.O
    </td>
    <td> PCTY.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo211" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo212">
      </button>
      PFE
    </td>
    <td> PFE</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo212" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo213">
      </button>
      PG
    </td>
    <td> PG</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo213" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo214">
      </button>
      PHM
    </td>
    <td>PHM </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo214" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo215">
      </button>
      PII
    </td>
    <td>PII </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo215" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo216">
      </button>
      PKG
    </td>
    <td> PKG</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo216" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo217">
      </button>
      PKI
    </td>
    <td>PKI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo217" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo218">
      </button>
      PLD
    </td>
    <td> PLD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo218" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo219">
      </button>
      PNW
    </td>
    <td>PNW </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo219" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo220">
      </button>
      PPC.O
    </td>
    <td>PPC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo220" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo221">
      </button>
      PPG
    </td>
    <td> PPG</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo221" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo222">
      </button>
      PRFT.O
    </td>
    <td> PRFT.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo222" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo223">
      </button>
      PSB
    </td>
    <td>PSB </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo223" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo224">
      </button>
      PSN
    </td>
    <td> PSN</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo224" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo225">
      </button>
      PSX
    </td>
    <td> PSX</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo225" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo226">
      </button>
      PVH
    </td>
    <td>PVH </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo226" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo227">
      </button>
      PWR
    </td>
    <td>PWR </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo227" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo228">
      </button>
      PXD
    </td>
    <td> PXD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo228" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo229">
      </button>
      RBC
    </td>
    <td> RBC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo229" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo230">
      </button>
      REGN.O
    </td>
    <td> REGN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo230" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo231">
      </button>
      REXR.K
    </td>
    <td> REXR.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo231" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo232">
      </button>
      REZL.K
    </td>
    <td>REZL.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo232" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo233">
      </button>
      RGLD.O
    </td>
    <td> RGLD.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo233" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo234">
      </button>
      RH
    </td>
    <td>RH </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo234" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo235">
      </button>
      RMD
    </td>
    <td>RMD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo235" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo236">
      </button>
      ROK
    </td>
    <td>ROK </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="236" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo237">
      </button>
      ROK
    </td>
    <td> ROK</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo237" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo238">
      </button>
      ROL
    </td>
    <td>ROL </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo238" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo239">
      </button>
      RS
    </td>
    <td>RS </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo239" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo240">
      </button>
      SAFM.O
    </td>
    <td> SAFM.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo240" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo241">
      </button>
      SAIA.O
    </td>
    <td> SAIA.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo241" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo242">
      </button>
      SCI
    </td>
    <td> SCI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo242" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo243">
      </button>
      SFIX.O
    </td>
    <td> SFIX.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo243" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo244">
      </button>
      SITE.K
    </td>
    <td>SITE.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo244" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo245">
      </button>
      SJM
    </td>
    <td> SJM</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo245" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo246">
      </button>
      SKY
    </td>
    <td> SKY</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo246" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo247">
      </button>
        SLAB.O
    </td>
    <td> SLAB.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo247" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo248">
      </button>
      SMPL.O
    </td>
    <td> SMPL.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo248" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo249">
      </button>
      SMPL.O
    </td>
    <td> SMPL.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo249" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo250">
      </button>
      SMTC.O
    </td>
    <td>SMTC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo250" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo251">
      </button>
      SNDR.K
    </td>
    <td> SNDR.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo251" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo252">
      </button>
      SNPS.O
    </td>
    <td>SNPS.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo252" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo253">
      </button>
      SSD
    </td>
    <td> SSD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo253" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo254">
      </button>
      STLD.O
    </td>
    <td> STLD.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo254" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo255">
      </button>
      SWK
    </td>
    <td> SWK</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo255" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo256">
      </button>
      SXT
    </td>
    <td> SXT</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo256" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo257">
      </button>
      TDC
    </td>
    <td> TDC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo257" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo259">
      </button>
      TDOC.K
    </td>
    <td>TDOC.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo259" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo260">
      </button>
      TECH.O
    </td>
    <td>TECH.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo260" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo261">
      </button>
      TEX
    </td>
    <td>TEX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo261" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo262">
      </button>
      THO
    </td>
    <td>THO </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo262" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo263">
      </button>
      TJX
    </td>
    <td>TJX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo263" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo264">
      </button>
      TMO
    </td>
    <td>TMO </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo264" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo265">
      </button>
      TMX
    </td>
    <td>TMX </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo265" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo266">
      </button>
      TOL
    </td>
    <td>TOL </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo266" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo267">
      </button>
      TREX.K
    </td>
    <td> TREX.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo267" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo268">
      </button>
      TRNO.K
    </td>
    <td> TRNO.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo268" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo269">
      </button>
      TSLA_CFD
    </td>
    <td> TSLA_CFD</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo269" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo270">
      </button>
      TWITTER_CFD
    </td>
    <td>TWITTER_CFD </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo270" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>6</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo271">
      </button>
        TWOU.O
    </td>
    <td>TWOU.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo271" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo272">
      </button>
      UAA
    </td>
    <td>UAA </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo272" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo">
      </button>
      UFPI.O
    </td>
    <td>UFPI.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo273">
      </button>
      UHS
    </td>
    <td> UHS</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo273" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo274">
      </button>
      UNF
    </td>
    <td> UNF</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo274" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo275">
      </button>
      URBN.O
    </td>
    <td> URBN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo275" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo276">
      </button>
      VC.O
    </td>
    <td>VC.O </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo276" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo277">
      </button>
      VCYT.O
    </td>
    <td> VCYT.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo277" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo278">
      </button>
      VLO
    </td>
    <td> VLO</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo278" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo279">
      </button>
      VMC
    </td>
    <td> VMC</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo279" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo280">
      </button>
      VMI
    </td>
    <td>VMI </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo280" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo281">
      </button>
      VMW
    </td>
    <td>VMW </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo281" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo282">
      </button>
      VSH
    </td>
    <td> VSH</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo282" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo284">
      </button>
      WBA.O
    </td>
    <td> WBA.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo284" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo285">
      </button>
      WDFC.O
    </td>
    <td> WDFC.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo285" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo286">
      </button>
      WERN.O
    </td>
    <td> WERN.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo286" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo287">
      </button>
      WLK
    </td>
    <td> WLK</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo287" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo288">
      </button>
      WOR
    </td>
    <td> WOR</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo288" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo289">
      </button>
      WSM
    </td>
    <td>WSM </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo289" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo290">
      </button>
      WSO
    </td>
    <td> WSO</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo290" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo291">
      </button>
      WST
    </td>
    <td>WST </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo291" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo292">
      </button>
      WY
    </td>
    <td> WY</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo292" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo293">
      </button>
      XRAY.O
    </td>
    <td> XRAY.O</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo293" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo294">
      </button>
      YETI.K
    </td>
    <td> YETI.K</td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo294" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo295">
      </button>
      YETI.K
    </td>
    <td>YETI.K </td>
    <td>15% </td>
    <td>100</td>
    <td>0.01</td>
  </tr>
  <tr id="demo295" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2</p>
      <p> <span>Stop level : </span>5</p>
      <p> <span>contract size : </span>100</p>
      <p> <span>Margin currency : </span>USD</p>
      <p> <span>Profit calculation mode : </span>CFD</p>
      <p> <span>Margin calculation mode : </span>CFD</p>
      <p> <span>Margin hedge : </span>0</p>
      <p> <span>Margin percentage : </span>15%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market</p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50</p>
      <p> <span>volume step : </span>0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>14.30 - 21.00</p>
      <p> <span>Friday : </span>14.30 - 21.00</p>
  </tr>



</table>
<!--------- indexes of pagination ----------->
<nav aria-label=...>
  <ul id="pagList"class=pagination>
  </ul>
</nav>
<script>

/******************************Search In All Cols************************/

$(document).ready(function(){
  pagination(20);
  $("#searchTable").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable .search").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $('.collapsible').on("click",function(){
    if($(this).hasClass("remove"))
    {
      $(this).addClass('add');
      $(this).removeClass('remove');
      $(this).parent().parent().css('backgroundColor', 'white');
      $(this).parent().parent().css('border-bottom', '1px solid #ddd');
      $(this).parent().css('backgroundColor', 'white');
    }
    else
    {
      $(this).addClass('remove');
      $(this).removeClass('add');
      $(this).parent().parent().css('backgroundColor', '#fffbf1');
      $(this).parent().parent().css('border-bottom', 'none');
      $(this).parent().css('backgroundColor', '#f1f1f1');
    }

});
});
/******************Search By Col****************************/
function searchByCol(colNum , InputId) {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(InputId);
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByClassName("search");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[colNum];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
/*******************************************Sort By Col********************/
var toggle=true;
function sortByCol(col) {
  var table, rows, switching, i, x, y, shouldSwitch ,arrows , th ,toggleX , toggleY ;
  table = document.getElementById("myTable");
  th = document.getElementsByTagName("th");
  firstArrows = document.getElementsByClassName("firstArrowImg");
  secondArrows = document.getElementsByClassName("secondArrowImg");
  thirdArrows = document.getElementsByClassName("thirdArrowImg");
  fourthArrows = document.getElementsByClassName("fourthArrowImg");
  fifthArrows = document.getElementsByClassName("fifthArrowImg");
  firstCol=0;
  secondCol= 1;
  thirdCol= 2;
  fourthCol= 3;
  fifthCol=4;
  if(col === 0)
  {
    th[0].style.backgroundColor="#fdc213";
    th[1].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("firstArrowImg");
  }
  else if(col === 1)
  {
    th[1].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("secondArrowImg");
  }
  else if(col === 2)
  {
    th[2].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[1].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("thirdArrowImg");
  }
  else if(col === 3)
  {
    th[3].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[1].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("fourthArrowImg");
  }
  else if(col === 4)
  {
    th[4].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[1].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("fifththArrowImg");
  }
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = document.getElementsByClassName("search");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 0; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      firstX = rows[i].getElementsByTagName("TD")[firstCol];
      secondX=rows[i].getElementsByTagName("TD")[secondCol];
      thirdX=rows[i].getElementsByTagName("TD")[thirdCol];
      fourthX=rows[i].getElementsByTagName("TD")[fourthCol];
      fifthX=rows[i].getElementsByTagName("TD")[fifthCol];
      firstY = rows[i + 1].getElementsByTagName("TD")[firstCol];
      secondY=rows[i+1].getElementsByTagName("TD")[secondCol];
      thirdY=rows[i+1].getElementsByTagName("TD")[thirdCol];
      fourthY=rows[i+1].getElementsByTagName("TD")[fourthCol];
      fifthY=rows[i+1].getElementsByTagName("TD")[fifthCol];
      firstX.style.backgroundColor="white";
      secondX.style.backgroundColor="white";
      thirdX.style.backgroundColor="white";
      fourthX.style.backgroundColor="white";
      fifthX.style.backgroundColor="white";
      firstY.style.backgroundColor="white";
      secondY.style.backgroundColor="white";
      thirdY.style.backgroundColor="white";
      fourthY.style.backgroundColor="white";
      fifthY.style.backgroundColor="white";
      if(col === 0)
      {
        firstX.style.backgroundColor="#f5f7fa";
        firstY.style.backgroundColor="#f5f7fa";
        toggleX=firstX;
        toggleY=firstY ;
      }
      if(col === 1)
      {
        secondX.style.backgroundColor="#f5f7fa";
        secondY.style.backgroundColor="#f5f7fa";
        toggleX=secondX;
        toggleY= secondY;
      }
      if(col === 2)
      {
        thirdX.style.backgroundColor="#f5f7fa";
        thirdY.style.backgroundColor="#f5f7fa";
        toggleX=thirdX;
        toggleY=thirdY ;
      }
      if(col === 3)
      {
        fourthX.style.backgroundColor="#f5f7fa";
        fourthY.style.backgroundColor="#f5f7fa";
        toggleX=fourthX;
        toggleY=fourthY ;
      }
      if(col === 4)
      {
        fifthX.style.backgroundColor="#f5f7fa";
        fifthY.style.backgroundColor="#f5f7fa";
        toggleX=fifthX;
        toggleY=fifthY ;
      }

      // otherY.style.backgroundColor="white";
      //check if the two rows should switch place:
      if(toggle)
      {
        toggleArrows[0].style.display="none";
        toggleArrows[1].style.display="inline";
        if (toggleX.innerHTML.toLowerCase() > toggleY.innerHTML.toLowerCase())
        {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      else
      {
        toggleArrows[1].style.display="none";
        toggleArrows[0].style.display="inline";
        if (toggleX.innerHTML.toLowerCase() < toggleY.innerHTML.toLowerCase())
        {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }

    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
  toggle= !toggle;
}
/*----------------------------------------------------------------------pagination--------------------------------------------------------*/
$('#selectedVal').on('change', function()
{
  pagination($(this).val());
});
function pagination(val)
{
  var myDiv = document.getElementById("pagList");
  myDiv.innerHTML = "";
  $(".pagination").append("<li id='previous-page'><a href='javascript:void(0)' aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>"); // Add first page marker
var numberOfItems = $('#myTable .search').length;
 // Get total number of the items that should be paginated
var limitPerPage = val; // Limit of items per each page
$('#myTable .search:gt(' + (limitPerPage - 1) + ')').hide(); // Hide all items over page limits (e.g., 5th item, 6th item, etc.)
for (var i = 0; i < limitPerPage; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    } // Show items from the new page that was selected

var totalPages = Math.ceil(numberOfItems / limitPerPage); // Get number of pages
 // Get total number of the items that should be paginated
 console.log("ggg",val)
 console.log("ggg",totalPages)
$(".pagination").append("<li class='current-page active'><a href='javascript:void(0)'>" + 1 + "</a></li>"); // Add first page marker

// Loop to insert page number for each sets of items equal to page limit (e.g., limit of 4 with 20 total items = insert 5 pages)
for (var i = 2; i <= totalPages; i++) {
  $(".pagination").append("<li class='current-page'><a href='javascript:void(0)'>" + i + "</a></li>"); // Insert page number into pagination tabs
}
// Add next button after all the page numbers
$(".pagination").append("<li id='next-page'><a href='javascript:void(0)' aria-label=Next><span aria-hidden=true>&raquo;</span></a></li>");
// Function that displays new items based on page number that was clicked
$(".pagination li.current-page").on("click", function() {
  // Check if page number that was clicked on is the current page that is being displayed
  if ($(this).hasClass('active')) {
    return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
  } else {
    var currentPage = $(this).index(); // Get the current page number
    $(".pagination li").removeClass('active'); // Remove the 'active' class status from the page that is currently being displayed
    $(this).addClass('active'); // Add the 'active' class status to the page that was clicked on
    $("#myTable .search").hide(); // Hide all items in loop, this case, all the list groups
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page number that was clicked on

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }
  }

});

// Function to navigate to the next page when users click on the next-page id (next page button)
$("#next-page").on("click", function() {
  var currentPage = $(".pagination li.active").index(); // Identify the current active page
  // Check to make sure that navigating to the next page will not exceed the total number of pages
  if (currentPage === totalPages) {
    return false; // Return false (i.e., cannot navigate any further, since it would exceed the maximum number of pages)
  } else {
    currentPage++; // Increment the page by one
    $(".pagination li").removeClass('active'); // Remove the 'active' class status from the current page
    $("#myTable .search").hide(); // Hide all items in the pagination loop
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
  }
});

// Function to navigate to the previous page when users click on the previous-page id (previous page button)
$("#previous-page").on("click", function() {
  var currentPage = $(".pagination li.active").index(); // Identify the current active page
  // Check to make sure that users is not on page 1 and attempting to navigating to a previous page
  if (currentPage === 1) {
    return false; // Return false (i.e., cannot navigate to a previous page because the current page is page 1)
  } else {
    currentPage--; // Decrement page by one
    $(".pagination li").removeClass('active'); // Remove the 'activate' status class from the previous active page number
    $("#myTable .search").hide(); // Hide all items in the pagination loop
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
  }
});
}
</script>

</body>
</html>
