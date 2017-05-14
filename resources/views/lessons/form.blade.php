<h2>Create a new lesson </h2>

<form action="/addLesson" method="post">
  {!! csrf_field() !!}
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">

      <input type="text" name="lessonName" class="form-control" placeholder="Lesson Name">
  </div>

  <div class="form-group">
    <textarea type="text" name="description" class="form-control" placeholder="Description">

    </textarea>

  </div>

  <div class="form-group">
    <input type="number" name="placeAvailable" placeholder="Number of places" >
  </div>

  <div class="form-group">
    <input type="number" name="beginning" placeholder="Beginning" >
  </div>

  <div class="form-group">
    <input type="number" name="end" placeholder="Ending" >
  </div>
  <button type="btn btn-primary">Créer</button>

</form>
