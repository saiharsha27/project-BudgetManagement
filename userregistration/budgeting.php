<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Budgeting</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="budgeting.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand" href="index.html"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href = "budgeting.php">Budget + Report</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href = "aboutus.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href = "contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href = "logout.php">Logout</a>
                </li>
            </ul>
        </div>
      </nav>
      <div>
          <h1 class="btitle"> Budgeting </h1>
      <div/>

      <section class="text-center entergoals">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h3>Enter your budget goals below.</h3>
              <hr class="budget">
              <div class="form-group mt-3">
                <label for="food-input">Food</label>
                <input type="number" class="form-control" id="food-input">
              </div>
              <div class="form-group mt-3">
                <label for="transportation-input">Transportation</label>
                <input type="number" class="form-control" id="transportation-input">
              </div>
              <div class="form-group mt-3">
                <label for="utilities-input">Utilities</label>
                <input type="number" class="form-control" id="utilities-input">
              </div>
              <div class="form-group mt-3">
                <label for="insurance-input">Insurance</label>
                <input type="number" class="form-control" id="insurance-input">
              </div>
              <div class="form-group mt-3">
                <label for="personalspending-input">Personal Spending</label>
                <input type="number" class="form-control" id="personalspending-input">
                <button class="btn btn-primary mt-3" style="background-color: #1e2f23;" id="getSumBtn">Get Sum of Budget Goals</button>
              </div>
              <h1 id="sum"> </h1>
            </div>

            <div class="col-md-2">  </div>
            <div class="col-md-5">
              <h3>Enter your spendings below.</h3>
              <hr class="budget">
              <div class="form-group mt-3">
                <label for="food2-input">Food</label>
                <input type="number" class="form-control" id="food2-input" name="food">
              </div>


              <div class="form-group mt-3">
                <label for="transportation2-input">Transportation</label>
                <input type="number" class="form-control" id="transportation2-input" name="transport">
              </div>

              <div class="form-group mt-3">
                <label for="utilities2-input">Utilities</label>
                <input type="number" class="form-control" id="utilities2-input" name="utilities">
              </div>

              <div class="form-group mt-3">
                <label for="insurance2-input">Insurance</label>
                <input type="number" class="form-control" id="insurance2-input" name="insurance">
              </div>

              <div class="form-group mt-3">
                <label for="personalspending2-input">Personal Spending</label>
                <input type="number" class="form-control" id="personalspending2-input" name="personal">
                <button class="btn btn-primary mt-3" style="background-color: #1e2f23;" id="getSumBtn2">Get Sum of Spendings</button>
              </div>
              <h1 id="sum2"> </h1>
            </div>
          </div>
        </div>
      </section>

  <div class="images">
    <img src="budgetimage1.jpg" alt="" style="width:300px; height:250px; margin-left:5%;">

    <img src="budgetimage2.jpg" alt="" style="width:300px; height:250px; margin-left:60%;">
  </div>

 <div>
      <body style="background-color: #84b496;">
        <br><br/>


           <button class="btn btn-primary mt-3 piechart" id="myBtn" onclick="getReport()" style="border:0px solid black; background-color: transparent; font-size: 70px ; margin-left: 450px" >Get Report</button>

       <div id="container" style="width: 100%; height: 100%"></div>
      <body/>
    <div/>

    <h1 id="transportation"><h1/>
    <h2 id="transpoints"></h2>
    <h1 id="food"></h1>
    <h2 id="foodpoints"></h2>
    <h1 id="utilities"></h1>
    <h2 id="utilpoints"></h2>
    <h1 id="insurance"></h1>
    <h2 id="insurpoints"></h2>
    <h1 id="personalspending"></h1>
    <h2 id="pspoints"></h2>
    <h2 id="points"><h2/>

    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <script src="canvasjs.min.js"></script>

    <script src="budgeting.js"></script>
</body>


</html>
