スケジュール確認ページ<br>

<p>{{$schedule->date}}</p>

@foreach($tasks as $task)
<span>{{$task->task_name}}</span>
　　　
<span>{{$task->scheduled_start_time}}</span>
<span>{{$task->scheduled_end_time}}</span>
　　　
<span>{{$task->actual_start_time}}</span>
<span>{{$task->actual_end_time}}</span>
<br>
@endforeach

<a href="{{route('schedules.index')}}">戻る</a>