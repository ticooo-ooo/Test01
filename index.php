<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Linux</title>
    <style>
      h1{
        border-bottom: 1px solid black;
        margin : 0;
        padding : 20px;
      }
      table{
        white-space:nowrap;
        width: 100%;
      }
      tr{
        display:grid;
        grid-template-columns: 75px 1fr 125px 100px;
        center;
      }
      th, td{
        border-bottom:1px solid black;
      }
    </style>
  </head>
  <body>
    <h1><a href="test01.php">게시판</a></h1>
    <table>
      <thead>
        <tr>
          <th>글 번호</th>
          <th>글 제목</th>
          <th>작성자</th>
          <th>작성시간</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <th>제목입니다</th>
          <th>누구?</th>
          <th>1/31</th>
        </tr>
      </tbody>
    </table>
  </body>
</html>
