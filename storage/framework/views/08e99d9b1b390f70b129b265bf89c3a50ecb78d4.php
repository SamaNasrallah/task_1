<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
<form action="<?php echo e(URL('test')); ?>" method="POST">

<div class="container"> 
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

<input type="submit" class="btn btn-success" value="اعتماد">

<div class="wor" >
        <h3 style="display: inline; "  >  السائق </h3> 
            <br>
            <select style="font-size: 20px;" name="driv" id="driv" >
                <option value="MhAh">محمد احمد</option>
                <option value="MhRe">محمد رياض الخضري </option>
                <option value="AyMh"> ايمن محمد الديراوي</option>

            </select>
        </div>

        <div class="wor2">
            <br>
    <h3 style="display: inline;"> الكمية </h3> <br>
    <label >
        <input type="number" name="num"  id="num"  >
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
                <option value="solar" >سولار</option>
                <option value="petrol" >بنزين</option>
            </select>
        </div>

      
    </div>
    </form>
    <hr> 

    <h1 style="margin-left:85%; " >الطلبات السابقة </h1>

    <table>
          <tr>
            <th>الحالة</th>
            <th>السائق</th>
            <th>الكمية</th>
            <th>الصنف</th>
            <th>التاريخ</th>
            <th>رقم الطلب</th>
          </tr>

          <tr>
            <td>تم الاستلام</td>
            <td>محمد رياض الخضري</td>
            <td>10لتر </td>
            <td> سولار </td>
            <td> 03-02-2023 </td>
            <td> 1 </td>
         </tr>
         <tr>
            <td>تم الاستلام</td>
            <td>محمد رياض الخضري</td>
            <td>10لتر </td>
            <td> سولار </td>
            <td> 03-03-2023 </td>
            <td> 2 </td>
          </tr>
          <tr>
            <td>تم الاستلام</td>
            <td>محمد رياض الخضري</td>
            <td>10لتر </td>
            <td> سولار </td>
            <td> 03-03-2023 </td>
            <td> 3 </td>
          </tr>
  
  
    </table>


</body>
</html><?php /**PATH C:\Users\MI\Desktop\laravel\task1\resources\views/test.blade.php ENDPATH**/ ?>