$(document).ready(function()
{
    //global variables
    var imgArray = ["img/img0.png", "img/img1.png", "img/img2.png"];
    var roundWinnings = 0;
    var totalWinnings = 0;
    var totalPulls = 1;

   //on click listener to spin wheel
    $("button").on("click", pullLever);
    function pullLever()
    {
        var pullResults = [];  
        var index = 0; 
        for (var i = 0; i < 3; i++){
            index = Math.floor(Math.random() * 3);//three different images
            $(`#slot${i}`).attr("src", imgArray[index]);//randomizing images
            pullResults[i] = index;
        }
        //win conditions
        if (pullResults[0] == 0 && pullResults[1] == 0 && pullResults[2] == 0)//all cherry
        {
            roundWinnings = 10;
            winnings(roundWinnings);
        }
        else if (pullResults[0] == 1 && pullResults[1] == 1 && pullResults[2] == 1){//all orange
            roundWinnings = 50;
            winnings(roundWinnings);
        }
            
        else if (pullResults[0] == 2 && pullResults[1] == 2 && pullResults[2] == 2){//all grape
            roundWinnings = 100;
            winnings(roundWinnings);
        }
            
        else{//lose condition
                $("#roundWinnings").html(`Sorry, you didn't win this time!`).attr("class", "incorrect");
                $('#justWins').html(`Your total winnings amount to $${totalWinnings}!`);
                
                if(totalPulls > 100)
                {
                    $('#totalPulls').html(`You have pulled the lever 
                    ${totalPulls} times! You might have a gambling problem...`).attr("class", "incorrect");
                }
                else{
                    $('#totalPulls').html(`You have pulled the lever ${totalPulls} times!`);
                }
                    
            }
        totalPulls++;
    }
//calculates winnings if necessary, most situations are losses
function winnings(money){
        totalWinnings += roundWinnings;
        $('#roundWinnings').html(`You won ${money} dollars this round!`).attr("class", "correct");
        $('#justWins').html(`Your total winnings amount to $${totalWinnings}!`);
     
        if(totalPulls > 100)
        {
            $('#totalPulls').html(`You have pulled the lever 
            ${totalPulls} times! You might have a gambling problem...`).attr("class", "incorrect");
        }
        else
        {
            $('#totalPulls').html(`You have pulled the lever ${totalPulls} times!`);
        }
    }
});