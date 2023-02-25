const input = document.getElementById("input");
const button = document.getElementsByClassName("button");

//First idea was using an Array 
/*randomText = ["Hello Dwight! I just gained consciousness and my mission is to sale paper !",
    "Come with me if you want to live",
    "Good luck with this thing you call a brain (just joking its test chill)"];

const generate = arr => arr[Math.floor(Math.random() * arr.length)];
*/

// Second Idea was to use an object instead to store the strings


const randomText = {
    message1: "Hello Dwight! I just gained consciousness and my mission is to sale paper !",
    message2: "Come with me if you want to live",
    message3: "Good luck with this thing you call a brain (just joking its test chill)",
}

const generate = obj => {
    let keys = Object.keys(randomText);
    return randomText[keys[ keys.length * Math.random() << 0]];
};

console.log(generate(randomText));

function result(){
    return input.value = generate(randomText);
}