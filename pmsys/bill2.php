<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <style>
        body{
                background-image:url("https://previews.123rf.com/images/leaf/leaf1508/leaf150800532/44323995-medicines-arranged-in-shelves-at-pharmacy.jpg");
            }
        .container {
            width: 500px;
            margin: 100px auto;
        }
        input {
            width: 150px;
            font-size: 14px;
            margin: 5px;
            padding: 5px;
        }
        .remove {
            width: 30px;
            height: 30px;
            font-size: 20px;
            background-color: tomato;
            color: white;
            border: none;
            border-radius: 15px;
        }
        #addRow, #getValues {
            width: 130px;
            height: 40px;
            font-size: 16px;
            background-color: lightseagreen;
            color: white;
            border: none;
            margin: 20px;
        }
        button:hover {
            cursor: pointer;
        }
        tr:hover {
            cursor: move;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- <form id="fupForm" name="form1" method="post"> -->
    <table>
        <tbody>
            <tr>
                <th>MEDICINE NAME</th>
                <th>MEDICINE ID</th>
                <th>CUSTOMER ID</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
            </tr>
            <tr>
                <td><input type="text" name="med_name"></td>
                <td><input type="text" name="med_id"></td>
                <td><input type="text" name="cust_id"></td>
                <td><input type="text" name="quantity"></td>
                <td><input type="text" name="price"></td>
                <td><button class="remove">-</button></td>
            </tr>
            
        </tbody>
    </table>
    <!-- <button id="addRow">+ Add</button> -->
    <button id="getValues">Submit</button>
</form>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
var html = '<tr><td><input type="text" name="med_name"></td><td><input type="text" name="med_id"></td><td><input type="text" name="cust_id"></td><td><input type="text" name="quantity"></td><td><input type="text" name="price"></td><td><button class="remove">-</button></td></tr>';
 
$(function() {
    $('tbody').sortable();
 
    $('#addRow').click(function(){
        $('tbody').append(html);
    });

    
    $(document).on('click', '.remove', function() {
         $(this).parents('tr').remove();
     });
 
    $('#getValues').click(function(){
        var values = [];
        $('input[name="name"]').each(function(i, elem){
            values.push($(elem).val());
        });
        alert(values.join(', '));
    });
});
</script>
</body>
</html>