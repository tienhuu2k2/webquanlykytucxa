<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{margin: 0px;}
        table{width: 80%;padding-top: 20px; padding-left: 70px; padding-right: 30px;
		}
		.col2{
			width: 80%;
			text-align: left;
			height: 25px;
			padding: 9px 0px;
		}
		.col1{
			    width: 20%;
    			text-align: left;
   				height: 25px;
   			    color: black;
   			    font-size: 18px;
		}
		.col3{
			width: 20%;
			text-align: center;
			padding: 20px 0px;
			/*padding-top: 30px;*/
		}
		.dd2{
			width: 35%;
			height: 40px;
            text-align: center;
			display: inline-block;
		    border-radius: 5px;
		    border-color: white;
		    box-sizing: border-box;
		}
		.input{
			width: 70%;
			height: 40px;
			display: inline-block;
		    border-radius: 5px;
		    border-color: white;
		    box-sizing: border-box;
		}
		.submit{
			width: 148px;	
			height: 40px;
			background-color: white;
		    color: #2980B9;
		    border: 2px solid;
		    border-radius: 5px;
		    border-color: #2980B9;
		    cursor: pointer;
		    font-size: 17px;
		    
		}
		.submit:hover{
			color: white;
			background-color: #2980B9;
		}
		table caption{
            padding-top: 20px;
        }
		
    </style>
</head>
<body>
    <form method="POST" action="http://localhost/New-MVC/Insert_thietbi/Ins_thietbi">
        <table>
            <caption><h2 style="color: #2980B9;">Thêm thiết bị</h2></caption>
            <tr>
                <td class="col1">
                    <label>Mã tb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" id="" name="txtmatb"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Tên tb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttentb"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Phòng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtphong"/>
                </td>
            </tr>
            <tr>
                <td class="col1">Toàn nhà</td>
                <td class="col2">
                    <select class="dd2" name="ddtoanha">
                        <option value="">--Chọn tòa nhà--</option>
                        <option value="a">Tòa A</option>
                        <option value="b1">Tòa B1</option>
                        <option value="b2">Tòa B2</option>
                        <option value="c">Tòa C</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Số lượng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtslg"/>
                </td>
            </tr>
            <tr>
                <td class="col1">Tình trạng: </td>
                <td class="col2">
                    <select class="dd2" name="ddtinhtrang">
                        <option value="">--Tình trạng--</option>
                        <option value="bình thường">Bình thường</option>
                        <option value="hỏng">Hỏng</option>
                        <option value="chưa có">Chưa có</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="col3">
                    <button class="submit" type="submit" name="submit_them"><i class="fa-solid fa-floppy-disk"></i> Insert</button>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="col3">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_tb_insert"])){?>
                        <p ><?php echo $data["thongbao_tb_insert"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>