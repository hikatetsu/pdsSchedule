スケジュール作成ページ

<p>いつのスケジュールを作成しますか？</p>
<form action="{{route('schedules.create')}}" method="post">
@csrf
<label for="date">日付</label>
<input type="date" name="date" id="date">
<button type="submit">新規作成</button>
</form>

<a href="{{route('schedules.index')}}">戻る</a>