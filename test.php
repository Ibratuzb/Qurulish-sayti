<div class="container">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th></th>
                <th>Mahsulot raqami</th>
                <th>Mahsulot nomi</th>
                <th>Narxi</th>
                <th>Soni</th>
                <th></th> 
            </tr>
            <?php 
            $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
            $no_of_user_products= mysqli_num_rows($user_products_result);
            $counter=1;
            while($row=mysqli_fetch_array($user_products_result)){             
            ?>
            <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['price']?></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a href='cart_modify.php?action=decrease&id=<?php echo $row['id'] ?>' class='btn btn-default btn-sm'>-</a>
                        </span>
                        <input type="text" class="form-control input-sm" value="<?php echo $row['quantity'] ?>" readonly>
                        <span class="input-group-btn">
                            <a href='cart_modify.php?action=increase&id=<?php echo $row['id'] ?>' class='btn btn-default btn-sm'>+</a>
                        </span>
                    </div>
                </td>
                <td>
                    <a href='cart_modify.php?action=remove&id=<?php echo $row['id'] ?>' class='btn btn-danger btn-sm'>O'chirish</a>
                </td>
            </tr>
            <?php $counter=$counter+1;}?>
            <tr>
                <td></td>
                <td></td>
                <td>Umumiy</td>
                <td>Sum <?php echo $sum;?>/-</td>
                <td></td>
                <td>
                    <a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Tasdiqlash</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Mahsulot raqami</th><th>Mahsulot Nomi</th><th>Narxi</th><th></th><th></th>
            </tr>
            <?php 
                $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                $no_of_user_products = mysqli_num_rows($user_products_result);
                $counter = 1;
                while($row = mysqli_fetch_array($user_products_result)) {
                    $product_id = $row['id'];
                    $quantity = $row['quantity'];
            ?>
            <tr>
                <th><?php echo $counter ?></th><th><?php echo $row['name'] ?></th><th><?php echo $row['price'] ?></th>
                <th>
                    <a href='cart_remove.php?id=<?php echo $product_id ?>'>O'chirish</a>
                </th>
                <th>
                    <form method="POST" action="cart_modify.php">
                        <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                        <button type="submit" name="modify" value="-">-</button>
                        <span><?php echo $quantity ?></span>
                        <button type="submit" name="modify" value="+">+</button>
                    </form>
                </th>
            </tr>
            <?php 
                    $counter++;
                }
            ?>
            <tr>
                <th></th><th>Umumiy</th><th>Sum <?php echo $sum;?>/-</th><th></th><th>
                    <a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Tasdiqlash</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>


<input type="text" class="form-control input-sm" value="<?php echo $row['quantity'] ?>" readonly> 