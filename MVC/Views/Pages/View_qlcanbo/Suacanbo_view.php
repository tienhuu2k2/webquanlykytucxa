<?php
if(isset($data['dl'])){
    $kq=$data['dl'];
    while ($row=mysqli_fetch_array($kq)){
        $tdn = $row['tendn'];
        $mk = $row['mk'];
        $mcb = $row['macb'];
        $tcb=$row['tencb'];
        $email=$row['email'];
        $sdt=$row['sdt'];
        $dc=$row['dc'];
    }
}
?>

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
    <form method="POST" action="http://localhost/New-MVC/Qlcanbo/Update_cb">
        <table>
            <caption><h2 style="color: #2980B9;">Sửa cán bộ</h2></caption>
            <tr>
                <td class="col1">
                    <label>Macb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text"  name="txtmacb" value="<?php if(isset($data['mcb'])){echo $data['mcb'] ;}else{echo $mcb;}?>" readonly style="color: red;">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Tên cb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttencb" value="<?php if(isset($data['tcb'])){echo $data['tcb'] ;}else{echo $tcb;}?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Tên dn: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text"  name="txttendn" value="<?php if(isset($data['tdn'])){echo $data['tdn'] ;}else{echo $tdn;}?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Mật khẩu: </label>
                </td>
                <td class="col2">
                    <input class="input" type="password" name="txtmk" value="<?php if(isset($data['mk'])){echo $data['mk'] ;}else{echo $mk;}?>">
                </td>
            </tr>
            
            
            <tr>
                <td class="col1">
                    <label>Email: </label>
                </td>
                <td class="col2">
                    <input class="input" type="email" name="txtemail" value="<?php if(isset($data['email'])){echo $data['email'] ;}else{echo $email;}?>">
                </td>
            </tr>

            <tr>
                <td class="col1">
                    <label>Sđt: </label>
                </td>
                <td class="col2">
                    <input class="input" type="tel" name="txtsdt" value="<?php if(isset($data['sdt'])){echo $data['sdt'] ;}else{echo $sdt;}?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Địa chỉ: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtdc" value="<?php if(isset($data['dc'])){echo $data['dc'] ;}else{echo $dc;}?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="col3">
                    <button class="submit" type="submit" name="submit_sua"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="col3" style="padding:0px 0px;">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_cb_sua"])){?>
                        <p ><?php echo $data["thongbao_cb_sua"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>