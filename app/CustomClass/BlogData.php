<?php

namespace App\CustomClass;
use App\Blog;

class BlogData{

	private $id;
	private $title;
	private $detail;
	private $photo;
	private $created_at;

	public function __construct($blog_id){
		$blogs=Blog::where('id',$blog_id)->firstOrFail();
		$this->setId($blogs->id);
		$this->setTitle($blogs->title);
		$this->setDetail($blogs->detail);
		$this->setPhoto($blogs->photo);
		$this->setCreated_at($blogs->created_at);	
	}	

	public function getSingleBlogData(){
		return $arr=[
			'id' => $this->getId(),
			'title' => $this->getTitle(),
			'detail' => $this->getDetail(),
			'photo' => $this->getPhoto(),
			'created_at' => $this->getCreated_at()
		];
	}

	public static function getAllData($blog_datas){
		$arr=[];
		foreach($blog_datas as $data){
			$obj=new BlogData($data->id);
			array_push($arr,$obj->getSingleBlogData());
		}

		return $arr;
	}

	private function setId($id){
		$this->id=$id;
	}

	private function setTitle($title){
		$this->title=$title;
	}

	private function setDetail($detail){
		$this->detail=$detail;
	}

	private function setPhoto($photo){
		$this->photo=Path::$path."/upload/blog/".$photo;
	}

	private function setCreated_at($created_at){
		$this->created_at=$created_at;
	}

	private function getId(){
		return $this->id;
	}

	private function getTitle(){
		return $this->title;
	}

	private function getDetail(){
		return $this->detail;
	}

	private function getPhoto(){
		return $this->photo;
	}

	private function getCreated_at(){
		return $this->created_at;
	}

}