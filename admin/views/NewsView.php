<?php 
    //load file Layout.php vao day
    $layout = "Layout.php";
 ?>
<div style="margin-bottom:5px;">
        <a href="index.php?controller=news&action=create" 
            style=" display: inline-block;
                    margin-bottom: 0;
                    font-weight: 400;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    touch-action: manipulation;
                    cursor: pointer;
                    background-image: none;
                    padding: 6px 12px;
                    font-size: 14px;
                    line-height: 1.42857143;

                    color: #fff;
                    background-color: #3c8dbc;
                    border-color: #367fa9;
                    border-radius: 3px;
                    box-shadow: none;
                    border: 1px solid transparent;
                    " 
            >Add news</a>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title" style="color: #fff;" >List news</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-contextual">
            <tr>
                    <th style="width: 100px;">Photo</th>
                    <th>Name</th>
                    <th style="width: 70px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align:center;">
                        <?php if(file_exists("../assets/upload/news/".$rows->photo)&&$rows->photo != ""): ?>
                            <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <?php if($rows->hot == 1): ?>
                            <span class="mdi mdi-check"></span>
                        <?php endif; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item active"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=news&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
    </div>
    </div>
</div>