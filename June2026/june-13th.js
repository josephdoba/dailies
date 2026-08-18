import readline from "node:readline"

const words = readline

// turns on keyboard translation
words.emitKeypressEvents(process.stdin);

// set raw mode
if (process.stdin.isTTY) {
    process.stdin.setRawMode(true);
}

console.log("Listening... ctrl+c to stop.\n");

// happens on every keypress trigger instead of while loop
process.stdin.on("keypress", (character, key) => {
    // check for exit command (ctrl+c)
    if (key.ctrl && key.name === "c") {
        process.exit(); 
    }
    console.log("Key pressed: ", key);
});



// currently "referenceError addEventListener not defined... perhpas you need to import a library?"
// though, I swear AEL is part of js's standard lib. perhaps its node related
// found this: https://nodejs.org/api/stream.html#readablereadsize
// ok so its a node library.. 
// hm so this, in terminal reveals the object.. what if I play around with "emitKeypressEvents"
// has to be set to raw mode to output it to console properly.