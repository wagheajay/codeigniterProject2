<h1>Projects</h1>

<a class="btn btn-primary pull-right" href="<?php base_url();?>projects/create">Create Project</a>

<table class="table table-hover ">

    <tr>
        <th>
            Project Name
        </th>
        <th>
            Project Body
        </th>
    </tr>
</thead>

<tbody>


<?php  foreach($projects as $project):?>
<tr>
    <!-- showing id as parameter  as projects/display/project_id as parameter link using concatination     -->
<?php  echo "<td>". "<a href ='".base_url()."projects/display/".$project->id."' >". $project->project_name ."</td>"; ?>
<?php  echo "<td>". $project->project_body ."</td>"; ?>

<?php  endforeach;?>
</tr>

</tbody>


</table>