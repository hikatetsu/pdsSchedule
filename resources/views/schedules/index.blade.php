myスケジュールページ<br>

<a href="{{route('schedules.create')}}">スケジュールを作成する</a><br>

@foreach($schedules as $schedule)
<a href="{{route('tasks.index',['scheduleId' => $schedule->id])}}">{{$schedule->date}}　{{$schedule->updated_at}}</a>
<br>
@endforeach