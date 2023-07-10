<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>

    <style>
        .container {
            display: flex;
            align-items: center;
            gap: 20px;
        }
     

        .wor {
              margin-left: 500px;
              font-size: 24px;
              
        }
        .wor2 {
            margin-left: 80px;
            margin-right:50px;
            margin-top:26px;
            font-size: 24px;
        }
        .wor3 {
            margin-right:4px;
            font-size: 24px;
        }
           
        input[type="submit"] {
            background-color: green;
              color: white; 
              font-size: 24px;
              box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
              margin-left:30px
                   } 

         table {
             font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
               }

         td, th {
             border: 1px solid #000000;
             text-align: center;
              padding: 8px;
               }

         th {
             background-color: #dddddd;
            }
         tr:nth-child(even) {
             background-color: #f0f0f0;
            }
    </style>
</head>
<body>
<form action="{{ URL('task/store') }}" method="POST">

<div class="container"> 
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="submit" class="btn btn-success" value="اعتماد">

<div class="wor" >
        <h3 style="display: inline; "  >  السائق </h3> 
            <br>
            <select style="font-size: 20px;" name="driver" id="driv" >
                <option >محمد احمد</option>
                <option >محمد رياض الخضري </option>
                <option > ايمن محمد الديراوي</option>

            </select>
        </div>

        <div class="wor2">
            <br>
    <h3 style="display: inline;"> الكمية </h3> <br>
    <label >
        <input type="number" name="Quantity"  id="Quantity"  >
    </label>
    <br>
    <label >
        <input type="radio" name="amount" id="liter" value="liter">لترات
    </label>
    <br>
    <label >
        <input type="radio" name="amount" id="money" value="money">مبلغ
    </label>
</div>

        <div class="wor3"> 
         <h3 style="display: inline; "> الصنف  </h3></h3> <br>
            <select  style="font-size: 20px;" name="item" id="item">
                <option>سولار</option>
                <option>بنزين</option>
            </select>
        </div>

      
    </div>
    </form>
    <hr> 

    <h1 style="margin-left:85%; " >الطلبات السابقة </h1>

    <table>
        <thead>
          <tr>
            <th>الحالة</th>
            <th>السائق</th>
            <th>الكمية</th>
            <th>الصنف</th>
            <th>التاريخ</th>
            <th>رقم الطلب</th>
          </tr>
        </thead>
        <tbody>
           
        @foreach ($tasks as $task)

             <tr>
                <td> {{ $task->stat }} </td>
                <td>  {{ $task->driver }} </td>
                <td> {{ $task->Quantity }}</td>
                <td>  {{ $task->item }} </td>
                <td> {{ $task->created_at->format('Y-m-d')  }} </td>
                <td> {{ $task->id }} </td>
               </tr> 

         
          @endforeach
        </tbody>
    </table>


</body>
</html>