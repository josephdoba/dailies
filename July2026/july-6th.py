print("today we're going through the networking section in python")

# https://docs.python.org/3/library/ipc.html

import asyncio # imports the async/await and allows for concurrent code

# allows for coroutines, network io, subprocesses, task distribution, and sync's concurrent code.

async def main():
    await asyncio.sleep(1)
    print("Hello!")

asyncio.run(main())