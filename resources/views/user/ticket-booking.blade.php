<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ticket Booking - MyShowz</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/style-starter.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #df0e62;
      --text-color: #333;
      --background-color: #f9f9f9;
      --container-bg: #fff;
      --button-bg: #fff;
      --button-border: #df0e62;
      --button-text: #333;
      --button-hover-bg: #df0e62;
      --button-hover-text: #fff;
    }

    [data-theme="dark"] {
      --primary-color: #df0e62;
      --text-color: #eee;
      --background-color: #1e1e1e;
      --container-bg: #2a2a2a;
      --button-bg: #2a2a2a;
      --button-border: #df0e62;
      --button-text: #eee;
      --button-hover-bg: #df0e62;
      --button-hover-text: #fff;
    }

    header {
      background: var(--container-bg);
      padding: 15px 30px;
      border-bottom: 3px solid var(--primary-color);
    }

    .navbar-brand {
      font-size: 28px;
      color: var(--primary-color) !important;
      text-decoration: none;
    }

    .container {
      max-width: 960px;
      margin: 30px auto;
      background: var(--container-bg);
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1, h2, h3 {
      color: var(--primary-color);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
      margin-bottom: 30px;
    }

    .btn, .seat, .movie-thumb {
      padding: 10px 16px;
      border: 2px solid var(--button-border);
      border-radius: 6px;
      cursor: pointer;
      background-color: var(--button-bg);
      color: var(--button-text);
      font-weight: bold;
      transition: all 0.3s ease;
      text-align: center;
    }

    .btn:hover, .seat:hover, .movie-thumb:hover {
      background-color: var(--button-hover-bg);
      color: var(--button-hover-text);
    }

    .selected {
      background-color: var(--button-hover-bg);
      color: var(--button-hover-text);
    }

    img.movie-thumb-img {
      max-width: 100%;
      border-radius: 6px;
      margin-bottom: 8px;
    }

    .next-btn {
      background-color: var(--primary-color);
      color: #fff;
      border: none;
      padding: 12px 24px;
      font-size: 18px;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .next-btn:disabled {
      background: #999;
      cursor: not-allowed;
    }

    .next-btn:hover:not(:disabled) {
      background-color: #c00d55;
    }
  </style>
</head>

<body>
  <header id="site-header" class="w3l-header fixed-top">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <span class="fa fa-play icon-log" aria-hidden="true"></span> MyShowz
      </a>
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
    </nav>
  </header>

  <div class="container">
    <h2>Selected Movie</h2>

    <div class="movie-thumb selected" data-id="{{ $movie->id }}" data-title="{{ $movie->title }}">
      <img class="movie-thumb-img" src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}">
      <p>{{ $movie->title }}</p>
    </div>

    <input type="hidden" name="movie_id" id="movieId" value="{{ $movie->id }}" />

    <h2>Select Day</h2>
    <div class="grid" id="days">
      <div class="btn" data-day="Monday">Mon</div>
      <div class="btn" data-day="Tuesday">Tue</div>
      <div class="btn" data-day="Wednesday">Wed</div>
      <div class="btn" data-day="Thursday">Thu</div>
      <div class="btn" data-day="Friday">Fri</div>
      <div class="btn" data-day="Saturday">Sat</div>
      <div class="btn" data-day="Sunday">Sun</div>
    </div>

    <h2>Select Screen</h2>
    <div class="grid" id="screens">
      <div class="btn" data-screen="1">Screen 1</div>
      <div class="btn" data-screen="2">Screen 2</div>
      <div class="btn" data-screen="3">Screen 3</div>
      <div class="btn" data-screen="4">Screen 4</div>
    </div>

    <h2>Select Time</h2>
    <div class="grid" id="times">
      <div class="btn" data-time="12:00 PM">12:00 PM</div>
      <div class="btn" data-time="3:00 PM">3:00 PM</div>
      <div class="btn" data-time="6:00 PM">6:00 PM</div>
      <div class="btn" data-time="9:00 PM">9:00 PM</div>
    </div>

    <h2>Select Seats</h2>
    <h3>Gold</h3>
    <div class="grid" id="seats-gold"></div>
    <h3>Platinum</h3>
    <div class="grid" id="seats-platinum"></div>
    <h3>Box</h3>
    <div class="grid" id="seats-box"></div>

    <form id="ticketForm" method="POST" action="{{ route('booking.store') }}">
      @csrf
      <input type="hidden" name="movie_id" id="movieIdField" />
      <input type="hidden" name="day" id="day" />
      <input type="hidden" name="screen" id="screen" />
      <input type="hidden" name="time" id="time" />
      <input type="hidden" name="seats" id="seats" />
      <button type="submit" class="next-btn" id="nextBtn" disabled>Continue to E-Ticket</button>
    </form>
  </div>

  <script>
    const generateSeats = (id, prefix, count) => {
      const container = document.getElementById(id);
      for (let i = 1; i <= count; i++) {
        const div = document.createElement('div');
        div.className = 'seat';
        div.dataset.seat = prefix + i;
        div.textContent = prefix + i;
        container.appendChild(div);
      }
    };

    generateSeats('seats-gold', 'A', 6);
    generateSeats('seats-platinum', 'B', 6);
    generateSeats('seats-box', 'C', 4);

    let selectedMovieId = document.getElementById('movieId').value;
    let selectedDay, selectedScreen, selectedTime, selectedSeats = [];

    document.querySelectorAll('#days .btn').forEach(el => {
      el.addEventListener('click', () => {
        document.querySelectorAll('#days .btn').forEach(x => x.classList.remove('selected'));
        el.classList.add('selected');
        selectedDay = el.dataset.day;
        checkReady();
      });
    });

    document.querySelectorAll('#screens .btn').forEach(el => {
      el.addEventListener('click', () => {
        document.querySelectorAll('#screens .btn').forEach(x => x.classList.remove('selected'));
        el.classList.add('selected');
        selectedScreen = el.dataset.screen;
        checkReady();
      });
    });

    document.querySelectorAll('#times .btn').forEach(el => {
      el.addEventListener('click', () => {
        document.querySelectorAll('#times .btn').forEach(x => x.classList.remove('selected'));
        el.classList.add('selected');
        selectedTime = el.dataset.time;
        checkReady();
      });
    });

    document.addEventListener('click', e => {
      if (e.target.classList.contains('seat')) {
        e.target.classList.toggle('selected');
        const seat = e.target.dataset.seat;
        if (e.target.classList.contains('selected')) {
          selectedSeats.push(seat);
        } else {
          selectedSeats = selectedSeats.filter(x => x !== seat);
        }
        checkReady();
      }
    });

    function checkReady() {
      const ready = selectedMovieId && selectedDay && selectedScreen && selectedTime && selectedSeats.length > 0;
      document.getElementById('nextBtn').disabled = !ready;
    }

    document.getElementById('ticketForm').addEventListener('submit', e => {
      document.getElementById('movieIdField').value = selectedMovieId || '';
      document.getElementById('day').value = selectedDay || '';
      document.getElementById('screen').value = selectedScreen || '';
      document.getElementById('time').value = selectedTime || '';
      document.getElementById('seats').value = selectedSeats.join(', ');
    });
  </script>

  <script src="{{ asset('user/assets/js/theme-change.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
