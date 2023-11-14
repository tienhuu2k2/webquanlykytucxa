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
			padding: 7px 0px;

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
			padding: 10px 0px;
			padding-right: 35px;
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
    <form method="POST" action="http://localhost/New-MVC/Insert_canbo/Ins_canbo">
        <table>
            <caption><h2 style="color: #2980B9;">Insert cán bộ</h2></caption>
            <tr>
                <td class="col1">
                    <label>Tên đn: </label>
                </td>
                
                <td class="col2">
                    <input class="input" type="text"  name="txttendn"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Mật khẩu: </label>
                </td>
                <td class="col2">
                    <input class="input" type="password" name="txtmk"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Macb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" id="" name="txtmacb"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Tên cb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttencb"/>
                </td>
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Email: </label>
                </td>
                <td class="col2">
                    <input class="input" type="email" name="txtemail"/>
                </td>
            </tr>

            <tr>
                <td class="col1">
                    <label>Sđt: </label>
                </td>
                <td class="col2">
                    <input class="input" type="tel" name="txtsdt"/>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Địa chỉ: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtdc"/>
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
                    <?php if(isset($data["thongbao_cb_insert"])){?>
                        <p ><?php echo $data["thongbao_cb_insert"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>