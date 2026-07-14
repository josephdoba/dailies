const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

async function justForToday(){
    console.log("can you practice at least something other than console logs??")
    await sleep(2000)
    console.log("im very tired today tho...")
    await sleep(2000)
    console.log("then wait a while!")
        
}

justForToday()
