<?php
function get_project_name_by_id($project_id){
	$CI = & get_instance();
	$CI->db->select('project_name');
	$CI->db->from('projects');
	$CI->db->where("id",$project_id);
	$query = $CI->db->get()->row();
	if(!empty($query)){
		return $query->project_name;
	}else{
		return;
	}
}
function get_job_name_by_id($job_id){
	$CI = & get_instance();
	$CI->db->select('job_name');
	$CI->db->from('jobs');
	$CI->db->where("id",$job_id);
	$query = $CI->db->get()->row();
	if(!empty($query)){
		return $query->job_name;
	}else{
		return;
	}
}
