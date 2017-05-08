<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
  </head>
  <body style="background-image:url(super.jpg); background-size: 100%; background-image: no-repeat;">
  <!-- <img src="./ziprecruiter-notext.svg" width="40" style="padding-bottom: 4px;"> -->
      <img src="./logo.png" height="285px" width="475" style="margin-bottom: -1.25em;">
    <div class='col-md-12 choose-candidate'>
      <div class='col-md-3 select'>
        <h3>Choose a candidate</h3>
        <form>
          <div class="form-group candidate-dropdown" style="margin-top: -1em;">
            <label for="sel1"></label>
            <select class="form-control" id="sel1">
              <option value="" disabled selected>Select your candidate</option>
              <option>Thomas</option>
              <option>Jay</option>
              <option>Tirth</option>
              <option>Rishabh</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary submit-candidate">Submit</button>
        </form>
      </div>
    </div>

    <div class='col-md-12 boxes' id="boxes" style="display: none;">
      <form method="post" action="graph.php">
        <div class="form-group">
          <label id="input-page-label" for="message-text" class="form-control-label">Feedback 1</label>
           <textarea  class="form-control" rows="7" name="review1">The candidate showed up early and prepared with copies of his resume. He was professionally dressed and greeted all of the HR team with a friendly attitude that came across as genuine and real. I think he will be a pleasure to work with. His previous experience at BigCorp shows that he knows how to work with management, and he's also spent some time mentoring junior engineers. He's also shown a proven ability to write clear and concise documentation, and wear many hats as the team's needs dictate.</textarea>

        </div>
        <div class="form-group">
          <label id="input-page-label" for="message-text" class="form-control-label">Feedback 2</label>
          <textarea class="form-control" rows="7" name="review2">When it comes to his object oriented programming skills, he is a very solid candidate. He quickly and thoroughly answered most of our programming questions in our Java test, but did struggle a little bit with the most difficult question we threw at him. He did a pretty good job of clarifying the problem before getting to work on it. In addition he's got a pretty decent grasp of other languages, including Python and Javascript. While he didn't have much knowledge of SQL, he was able to follow along and pick up some of the basics as we went through the Database portion of our technical test, so he clearly can expand his skillset easily.</textarea>

        </div>
        <div class="form-group">
          <label id="input-page-label" for="message-text" class="form-control-label">Feedback 3</label>
          <textarea class="form-control" rows="7" name="review3">We questioned him quite a bit about his last side project and how he worked with his team. He ran into issues with his team a few times and seems to have a handle on resolving conflicts in a team setting. He's also quite familiar with our collaboration and planning tools since he's worked extensively with Git, Subversion, and Jira. We had him handle a test code merge with our team and he was able to work through the issues with the team without incident.
          </textarea>

        </div>
        <button type="submit" class="btn btn-primary execute">Submit Data</button>
        <button type="submit" class="btn btn-primary execute">Resume Upload</button>
      </form>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="./application.js"></script>
  </body>
</html>
