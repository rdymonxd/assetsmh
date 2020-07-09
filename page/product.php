<div class="container bg-light shadow">

    <?php
    //listado //insert //update //delete

        $action = "list";

        if(isset($_REQUEST['action']))
            $action=$_REQUEST['action'];
        switch($action):
            case "list";
                 ?>
                <h1 class="shadow bg-dark text-white lead m-2 p-2">Product</h1>
                <a href="?page=product&action=insert" class="btn btn-danger">Create</a>
                <table class ="table">
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        <?php 
                            $u=$user->search("producto","1");
                            foreach($u as $r):
                        ?>
                        <tr>
                                <td><?php echo $r['id']?></td>
                                <td><?php echo $r['name']?></td>
                                <td>
                                    <a href="?page=product&action=update" class="btn btn-danger">
                                        Update
                                    </a>

                                    <a href="?page=product&action=delete" class="btn btn-danger">
                                        Delete
                                    </a>
                                </td>
                        </tr>
                        <?php
                            endforeach
                        ?>
                    </tbody>
                </table>
            <?php
                
            break;
            case "insert";
                if(isset($_REQUEST['btn'])):
                
                else:
                    ?>
                    <div class="col-sm-8">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">NAME:</label>
                                <input type="text" class="form-control" name="name">
                            </div>


                            <div class="form-group">
                                <label for="description">DESCRIPTION:</label>
                                <textarea class="form-control" name="description">
                                </textarea>
                            </div>
                        </form>    
                    </div>
                    <?php
                endif;
            break;
            case "update";
                echo "update";
            break;
            case "delete";
                echo "delete";
            break;
            
        endswitch;
    ?>

</div>