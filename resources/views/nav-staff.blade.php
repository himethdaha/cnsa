<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
      <img src="/images/logo.jpeg" alt="" height="75px;" width="73px;">
      <a class="navbar-brand" href="#">Canadian National Soccer Association</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-link"><a href="#">Create<b class="sr-only"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                          <a href="/staff/create">Staff</a></br>
                          <a href="/gameinfo/create">Game Info</a></br>
                          <a href="/schools/create">School</a></br>
                          <a href="/incidentlog/create">Incident Log</a></br>
                          <a href="/manager/create">Team Manager</a></br>
                          <a href="/stadiums/create">Stadium</a></br>
                          <a href="/teams/create">Team</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="nav-link"><a href="#">Update<b class="sr-only"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                        <a href="/staff/show">Staff</a></br>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-link"><a href="#">Show<b class="sr-only"></b></a>
                <ul class="dropdown-menu">
                    <li>
                      <a href="/injurylog/show">Injury Log</a></br>
                      <a href="/incidentlog/show">Incident Log</a></br>
                      <a href="/player/show">Players</a></br>
                      <a href="/coach/show">Coach</a></br>
                      <a href="/manager/show">Team Manager</a></br>
                      <a href="/stadiums/show">Stadium</a></br>
                      <a href="/gameinfo/show">Game Info</a></br>
                      <a href="/teams/show">Team Info</a></br>
                      <a href="/schools/show">School</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    </ul>

    <form action="/login">
      <div class="nav-right">
        <button type="submit" class="btn btn-danger navbar-btn login-btn">Logout</button>
      </div>
    </form>
  </div>
</nav>
