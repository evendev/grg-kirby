<?php 

namespace GreenRiverGorge;

use \str as String;

class ListRequest
{
    /**
     * Submission data
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new ListRequest
     *
     * @param  array $data
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $data;

        $this->data['timestamp'] = time();
    }

    /**
     * Save the submission
     *
     * @return void
     */
    public function store($page)
    {
        $title = $this->data['business_name'];
        $uid = date('Ymd', $this->data['timestamp']) . '-' . String::slug($title);

        $data = $this->data;

        $data['title'] = $title;
        $data['date'] = date('Y-m-d', $this->data['timestamp']);

        $page->children()->create($uid, 'list-request', $data);
    }
}