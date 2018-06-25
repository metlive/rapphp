<?php
namespace rap\swoole\queue;
use rap\web\Request;

/**
 * 南京灵衍信息科技有限公司
 * User: jinghao@duohuo.net
 * Date: 18/5/23
 * Time: 下午2:19
 */
class QueueController{

    /**
     * @var QueueService
     */
    private $queueService;

    public function _initialize(QueueService $queueService){
        $this->queueService=$queueService;
    }

    /**
     * 添加任务
     * @param Request $request
     * @return array
     */
    public function add(Request $request){
        $task=$request->put();
       $task_id=$this->queueService->addTask($task);
       return ['success'=>true,'task_id'=>$task_id];
    }

    /**
     * 取消任务
     * @param $task_id
     * @return array
     */
    public function cancel($task_id){
        $this->queueService->cancelTask($task_id);
        return ['success'=>true];
    }

}