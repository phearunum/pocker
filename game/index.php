
<!DOCTYPE html>

<html >
<head>
    <title>Playing Cards </title>
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" />
    <link href="/css/sihalive-style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">

            var cardWeights = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
            var cardTypes = ["spades.png", "hearts.png", "diamond.png", "clubs.png"];
            var cards = new Array();
            function card(cardType, weight) {
                this.cardType = cardType;
                this.weight = weight;
            }
            function CreateDeck() {
                cardTypes.forEach(function (weight) {
                    cardWeights.forEach(function (type) {
                        cards.push(new card(type, weight));
                    });
                });
            }
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            function shuffleDeck(shuffleCnt) {
                for(var i = 0; i < shuffleCnt; i++) {
                    var rndNo = getRandomInt(1, 52);
                    var card = cards[i];
                    cards[i] = cards[rndNo];
                    cards[rndNo] = card;
                }
            }

            function shuffle() {
                var cardWeights = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
                var cardTypes = ["spades.png", "hearts.png", "diamond.png", "clubs.png"];
                var cards = new Array();
                function card(cardType, weight) {
                    this.cardType = cardType;
                    this.weight = weight;
                }
                function CreateDeck() {
                    cardTypes.forEach(function (weight) {
                        cardWeights.forEach(function (type) {
                            cards.push(new card(type, weight));
                        });
                    });
                }
                function getRandomInt(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }
                function shuffleDeck(shuffleCnt) {
                    for(var i = 0; i < shuffleCnt; i++) {
                        var rndNo = getRandomInt(1, 52);
                        var card = cards[i];
                        cards[i] = cards[rndNo];
                        cards[rndNo] = card;
                    }
                }

                  CreateDeck();
                  shuffleDeck(getRandomInt(10, 25));
                $('#showCard').empty();
                  $.each(cards, function (i, e) {
                      $('#showCard').append('' +
                          '<div class="col-sm-1">' +
                          '<div class="card_face this-animate-zoom">' + e.cardType + '<br/>' +
                          '<center><span style="font-size: 12px"><img src="/img/' + e.weight + '"></span></center>' +
                          '</div>' +
                          '</div>'
                      );
                  });
              }
            function flip() {
                $('#showCard').empty();
                CreateDeck();
                shuffleDeck(getRandomInt(10, 25));
                console.log(cards);
                $.each(cards,function (i,e) {
                    $('#showCard').append(''+
                        '<div class="card_back this-animate-zoom "><div style="display: none">'+e.cardType +'</div><br/>' +
                        '<center><span style="font-size: 12px; display: none"><img src="/img/'+ e.weight+'"></span></center>' +
                        '</div>'
                    );
                });
            }


    </script>
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <button type="button" class="btn btn-info bottom" onclick="shuffle()"> Shuffle Card</button>
        <button type="button" class="btn btn-info bottom" onclick="flip()"> Flip</button>
    </div>
<br/>
    <div class="row">
            <div class="col-sm-12" id="showCard">
              <div class="card_back"></div>
            </div>
    </div>
</div>


</body>
</html>
