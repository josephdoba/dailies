// lets review async/await properly..

// define the wait

const sleepTime = (millisec) => new Promise(resolve => setTimeout(resolve, millisec));

const slackOff = async () => {
    console.log("lets get to the thing...");

    await sleepTime(2500) // pause for 2.5 seconds

    console.log("tomorrow!")

}

slackOff()