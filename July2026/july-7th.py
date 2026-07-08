print("today we're going through the networking section in python")

# https://docs.python.org/3/library/ipc.html

import asyncio # imports the async/await and allows for concurrent code

# allows for coroutines, network io, subprocesses, task distribution, and sync's concurrent code.

async def main():
    await asyncio.sleep(2)
    print("Hello!")

# asyncio.run(main()) 

with asyncio.Runner() as runner:
    runner.run(main())

    # hm, whats the difference between this one and the runner one?

    # ah, apparently one (on line 9) is the instance of an async command, where as runner allows multiple of them stacked inside it, so it runs more efficently.