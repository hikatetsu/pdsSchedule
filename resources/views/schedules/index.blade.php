myスケジュールページ<br>

@foreach($schedules as $schedule)
<a href="{{route('tasks.index',['scheduleId' => $schedule->id])}}">{{$schedule->date}}</a><br>
@endforeach