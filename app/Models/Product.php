<?php 
namespace App\Models;

class Product
{
    protected $assignee;
    protected $assigner;
    protected $comment_count;
    protected $completed;
    protected $content;
    protected $description;
    /**
     * @var \DateTime
     */
	protected $due;
	protected $id;
	protected $order;
	protected $priority;
	protected $project_id;
	protected $section_id;
    protected $parent_id;
    protected $url;
	

	public function __construct($id = 0) {
        $this->id = $id;
    }
	public function read(int $id)
	{

		$url = 'https://api.todoist.com/rest/v1/tasks/' . $id;


		return $this;
	}



}