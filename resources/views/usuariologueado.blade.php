@include('common/header')
<h1>La pagina principal</h1>
<br>
<br>
<center>
  <div class="header">
    <h2>Blog Name</h2>
  </div>

  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <h4>Autor: {{ Auth::user() -> name }}</h4>
        <p>Some text..</p>
      </div>
      <div class="card">
        <h2></h2>
        <h5>Title description, Sep 2, 2017</h5>
        <p>Some text..</p>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <div class="fakeimg" style="height:100px;">Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
    </div>
  </div>
</center>


@include('common/footer')