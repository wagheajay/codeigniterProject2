
<h2 class="text-center">Task Display View</h2>

<table class="table table-hover  table-bordered text-center ">

    <tr >
        <th class="text-center">
            Task Name
        </th>
        <th class="text-center">
            Task Body
        </th>
        <th class="text-center">
            Date Created
        </th>
    </tr>

    </thead>

    <tbody>





        <tr>

         <td>
             
               <div class="task-name">

               <?php echo  $task->task_name ?>

               </div>

               <div class="task-actions">

               <a href="<?php echo base_url();  ?>tasks/edit/<?php echo $task->id ?>">Edit</a>
               <a href="<?php echo base_url();  ?>tasks/delete/<?php echo $task->project_id ?>/<?php echo $task->id ?>">Delete</a>

               </div>
        </td>
        

            <?php echo "<td>" . $task->task_body . "</td>"; ?>
            <?php echo "<td>" . $task->date_created . "</td>"; ?>
            <td><a href="<?php  echo base_url();?>tasks/mark_complete/<?php  echo $task->id ?>">Mark Complete</a></td>
            <td><a href="<?php  echo base_url();?>tasks/mark_incomplete/<?php  echo $task->id ?>">Mark Incomplete</a></td>

        </tr>



    </tbody>

</table>