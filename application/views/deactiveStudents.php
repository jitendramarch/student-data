<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Student Management
        <!--<small>Add, Edit, Delete</small>-->
      </h1>
    </section>
    <section class="content">
      
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Deactivated Students List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url('user/deactivated_stud') ?>" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Sr.No</th> 
					  <th>Id</th>
                      <th>Name</th>
                      <th>Standard</th> 
					  <th>Contact No</th>
					  <th>Address</th>
					  
                      <th class="text-center"></th>
                    </tr>
                    <?php
                        for ($i = 0; $i < count($deptlist); ++$i)
                        {
                    ?>
                    <tr>
                      <td><?php echo ($i+1); ?></td>
                                   <td><?php echo $deptlist[$i]->stud_id; ?></td>
                                   <td><?php echo $deptlist[$i]->first_name; ?></td>
                                   <td><?php echo $deptlist[$i]->standard; ?></td>
                                   <td><?php echo $deptlist[$i]->contact_no; ?></td>
                                   <td><?php echo $deptlist[$i]->padress; ?></td>
								 
                       <!--<input checked data-toggle="toggle" type="checkbox">  
					 <td class="text-center">		 
						 <a class="btn btn-sm btn-info" href="<?php echo base_url('user/editmod'); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-stud_id="#"><i class="fa fa-trash"></i></a>
                      </td>-->
                    </tr>
                    <?php
                        
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
 
