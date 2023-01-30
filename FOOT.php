<?php 

$x = 1;
$tmp = array ("", 0, 0, 0, 0, 0, 0, 0, 0);
$Matchs = array();
global $Matchs;
global $Scores;

  $Equipes = array (
    array("Maroc", 0, 0, 0, 0, 0, 0, 0, 0),
    array("Belgique", 0, 0, 0, 0, 0, 0, 0, 0),
    array("Canada", 0, 0, 0, 0, 0, 0, 0, 0),
    array("Croatie", 0, 0, 0, 0, 0, 0, 0, 0)
  );

  if (isset($_POST['submit']))
  {
      function Counter($Score1, $Score2, $TeamName1, $TeamName2, &$Matchs, &$Points1, &$Points2, &$GamesPlayed1, &$GamesPlayed2, &$GamesWon1, &$GamesWon2, &$GamesDrew1, &$GamesDrew2, &$GamesLost1, &$GamesLost2, &$GoalsFor1, &$GoalsFor2, &$GoalsAgainst1, &$GoalsAgainst2, &$GoalsDifference1, &$GoalsDifference2)
    {
      array_push($Matchs, "$TeamName1", "$TeamName2");
      array_push($Matchs, "$Score1", "$Score1");
      if(($Score1 <=> $Score2) == 1)
        {
          $Points1 += 3;
          $GamesPlayed1 += 1;
          $GamesPlayed2 += 1;
          $GoalsFor1 += $Score1;
          $GoalsFor2 += $Score2;
          $GoalsAgainst1 += $Score2;
          $GoalsAgainst2 += $Score1;
          $GamesWon1 += 1;
          $GamesLost2 += 1;
          $GoalsDifference1 += $Score1 - $Score2;
          $GoalsDifference2 += $Score2 - $Score1;
        }
        elseif(($Score1 <=> $Score2) == -1)
          {
            $Points2 += 3;
            $GamesPlayed1 += 1;
            $GamesPlayed2 += 1;
            $GoalsFor1 += $Score1;
            $GoalsFor2 += $Score2;
            $GoalsAgainst1 += $Score2;
            $GoalsAgainst2 += $Score1;
            $GamesWon2 += 1;
            $GamesLost1 += 1;
            $GoalsDifference1 += $Score1 - $Score2;
            $GoalsDifference2 += $Score2 - $Score1;
          }
          elseif(($Score1 <=> $Score2) == 0)
            {
              $Points1 += 1;
              $Points2 += 1;
              $GamesPlayed1 += 1;
              $GamesPlayed2 += 1;
              $GoalsFor1 += $Score1;
              $GoalsFor2 += $Score2;
              $GoalsAgainst1 += $Score2;
              $GoalsAgainst2 += $Score1;
              $GamesDrew2 += 1;
              $GamesDrew1 += 1;
              $GoalsDifference1 += $Score1 - $Score2;
              $GoalsDifference2 += $Score2 - $Score1;
            }
    }

    Counter($_POST["Maroc"], $_POST["Croatie"], $Equipes[0][0], $Equipes[3][0], $Matchs, $Equipes[0][1], $Equipes[3][1], $Equipes[0][2], $Equipes[3][2], $Equipes[0][3], $Equipes[3][3], $Equipes[0][4], $Equipes[3][4], $Equipes[0][5], $Equipes[3][5], $Equipes[0][6], $Equipes[3][6], $Equipes[0][7], $Equipes[3][7], $Equipes[0][8], $Equipes[3][8]);
    Counter($_POST["Belgique"], $_POST["Canada"], $Equipes[1][0], $Equipes[2][0], $Matchs, $Equipes[1][1], $Equipes[2][1], $Equipes[1][2], $Equipes[2][2], $Equipes[1][3], $Equipes[2][3], $Equipes[1][4], $Equipes[2][4], $Equipes[1][5], $Equipes[2][5], $Equipes[1][6], $Equipes[2][6], $Equipes[1][7], $Equipes[2][7], $Equipes[1][8], $Equipes[2][8]);

    Counter($_POST["Belgique2"], $_POST["Maroc2"], $Equipes[1][0], $Equipes[0][0], $Matchs, $Equipes[1][1], $Equipes[0][1], $Equipes[1][2], $Equipes[0][2], $Equipes[1][3], $Equipes[0][3], $Equipes[1][4], $Equipes[0][4], $Equipes[1][5], $Equipes[0][5], $Equipes[1][6], $Equipes[0][6], $Equipes[1][7], $Equipes[0][7], $Equipes[1][8], $Equipes[0][8]);
    Counter($_POST["Croatie2"], $_POST["Canada2"], $Equipes[3][0], $Equipes[2][0], $Matchs, $Equipes[3][1], $Equipes[2][1], $Equipes[3][2], $Equipes[2][2], $Equipes[3][3], $Equipes[2][3], $Equipes[3][4], $Equipes[2][4], $Equipes[3][5], $Equipes[2][5], $Equipes[3][6], $Equipes[2][6], $Equipes[3][7], $Equipes[2][7], $Equipes[3][8], $Equipes[2][8]);

    Counter($_POST["Maroc3"], $_POST["Canada3"], $Equipes[0][0], $Equipes[2][0], $Matchs, $Equipes[0][1], $Equipes[2][1], $Equipes[0][2], $Equipes[2][2], $Equipes[0][3], $Equipes[2][3], $Equipes[0][4], $Equipes[2][4], $Equipes[0][5], $Equipes[2][5], $Equipes[0][6], $Equipes[2][6], $Equipes[0][7], $Equipes[2][7], $Equipes[0][8], $Equipes[2][8]);
    Counter($_POST["Belgique3"], $_POST["Croatie3"], $Equipes[1][0], $Equipes[3][0], $Matchs, $Equipes[1][1], $Equipes[3][1], $Equipes[1][2], $Equipes[3][2], $Equipes[1][3], $Equipes[3][3], $Equipes[1][4], $Equipes[3][4], $Equipes[1][5], $Equipes[3][5], $Equipes[1][6], $Equipes[3][6], $Equipes[1][7], $Equipes[3][7], $Equipes[1][8], $Equipes[3][8]);

      for($y = 0; $y < 8; $y++)
      {
        for($x = 0; $x < 4; $x++)
          {
            if ($x == 3)
              { 
                break;
              }
            if(($Equipes[$x][1] <=> $Equipes[$x+1][1]) == -1)
              {
                $tmp = $Equipes[$x+1];
                $Equipes[$x+1] = $Equipes[$x];
                $Equipes[$x] = $tmp; 
              }
                elseif(($Equipes[$x][1] <=> $Equipes[$x+1][1]) == 0)
                  {
                    if(($Equipes[$x][8] <=> $Equipes[$x+1][8]) == -1)
                      {
                        $tmp = $Equipes[$x+1];
                        $Equipes[$x+1] = $Equipes[$x];
                        $Equipes[$x] = $tmp; 
                      }
                      elseif(($Equipes[$x][8] <=> $Equipes[$x+1][8]) == 0)
                        {
                          if(($Equipes[$x][6] <=> $Equipes[$x+1][6]) == -1)
                            {
                              $tmp = $Equipes[$x+1];
                              $Equipes[$x+1] = $Equipes[$x];
                              $Equipes[$x] = $tmp;
                            }
                        }
                  }
          }  
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Simulateur</title>
</head>
<body>
    
        <div class="d-flex">
            <div class="col-6">
                    
                        <form action="" method="post">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <label for="Maroc">Maroc</label>
                                  <div class="d-flex justify-content-center">
                                    <input type="number" name="Maroc" style="width: 15%">
                                    <input type="number" name="Croatie" style="width: 15%">
                                  </div>
                                  <label for="Croatie">Croatie</label>
                                </div> 
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <label for="Belgique">Belgique</label>
                                  <div class="d-flex justify-content-center" style="margin-right: 13px">
                                    <input type="number" name="Belgique" style="width: 15%">
                                    <input type="number" name="Canada" style="width: 15%">
                                  </div> 
                                  <label for="Canada">Canada</label>
                                </div>  
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body" >
                                <div class="d-flex justify-content-between">
                                  <label for="Belgique2">Belgique</label>
                                  <div class="d-flex justify-content-center" style="margin-right: 18px">
                                    <input type="number" name="Belgique2" style="width: 15%">
                                    <input type="number" name="Maroc2" style="width: 15%">                                   
                                  </div> 
                                  <label for="Maroc2">Maroc</label> 
                                </div>                                                        
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <label for="Croatie2">Croatie</label>
                                  <div class="d-flex justify-content-center">
                                    <input type="number" name="Croatie2" style="width: 15%">
                                    <input type="number" name="Canada2" style="width: 15%">
                                  </div>
                                  <label for="Canada2">Canada</label>
                                </div>                               
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <label for="Maroc3">Maroc</label>
                                  <div class="d-flex justify-content-center" style="margin-left: 5px">
                                    <input type="number" name="Maroc3" style="width: 15%">
                                    <input type="number" name="Canada3" style="width: 15%">
                                  </div>                                  
                                  <label for="Canada3">Canada</label>
                                </div>                               
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <label for="Belgique3">Belgique</label>
                                  <div class="d-flex justify-content-center" style="margin-right: 10px; background-color: black; width: 20%">
                                    <input type="number" name="Belgique3" style="width: 15%">
                                    <input type="number" name="Croatie3" style="width: 15%">
                                  </div>                                
                                  <label for="Croatie3">Croatie</label>
                                </div>        
                              </div>
                            </div>
                            <button type="submit" name="submit">Enregistrer</button>    
                        </form>
            </div>
        
            <div class="col-6 mt-5">
               
                <table class="table">
                  
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Selection</th>
                        <th scope="col">Pts</th>
                        <th scope="col">M.J</th>
                        <th scope="col">M.G</th>
                        <th scope="col">Nuls</th>
                        <th scope="col">M.P</th>
                        <th scope="col">B.P</th>
                        <th scope="col">B.C</th>
                        <th scope="col">Diff</th>
                      </tr>
                    </thead>
                  

                    <tbody class="table-group-divider" >
                          <tr>
                        <th scope="row" class="bg-danger">1</th>
                        <td><?php echo $Equipes[0][0] ?></td>
                        <td><?php echo $Equipes[0][1] ?></td>
                        <td><?php echo $Equipes[0][2] ?></td>
                        <td><?php echo $Equipes[0][3] ?></td>
                        <td><?php echo $Equipes[0][4] ?></td>
                        <td><?php echo $Equipes[0][5] ?></td>
                        <td><?php echo $Equipes[0][6] ?></td>
                        <td><?php echo $Equipes[0][7] ?></td>
                        <td><?php echo $Equipes[0][8] ?></td>
                      </tr>                    
                      <tr>
                        <th scope="row">2</th>
                        <td><?php echo $Equipes[1][0] ?></td>
                        <td><?php echo $Equipes[1][1] ?></td>
                        <td><?php echo $Equipes[1][2] ?></td>
                        <td><?php echo $Equipes[1][3] ?></td>
                        <td><?php echo $Equipes[1][4] ?></td>
                        <td><?php echo $Equipes[1][5] ?></td>
                        <td><?php echo $Equipes[1][6] ?></td>
                        <td><?php echo $Equipes[1][7] ?></td>
                        <td><?php echo $Equipes[1][8] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><?php echo $Equipes[2][0] ?></td>
                        <td><?php echo $Equipes[2][1] ?></td>
                        <td><?php echo $Equipes[2][2] ?></td>
                        <td><?php echo $Equipes[2][3] ?></td>
                        <td><?php echo $Equipes[2][4] ?></td>
                        <td><?php echo $Equipes[2][5] ?></td>
                        <td><?php echo $Equipes[2][6] ?></td>
                        <td><?php echo $Equipes[2][7] ?></td>
                        <td><?php echo $Equipes[2][8] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td><?php echo $Equipes[3][0] ?></td>
                        <td><?php echo $Equipes[3][1] ?></td>
                        <td><?php echo $Equipes[3][2] ?></td>
                        <td><?php echo $Equipes[3][3] ?></td>
                        <td><?php echo $Equipes[3][4] ?></td>
                        <td><?php echo $Equipes[3][5] ?></td>
                        <td><?php echo $Equipes[3][6] ?></td>
                        <td><?php echo $Equipes[3][7] ?></td>
                        <td><?php echo $Equipes[3][8] ?></td>
                      </tr>
                    </tbody>
                  </table>

                    
               
            </div>

        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>