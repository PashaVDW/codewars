"""
Your task is to make a function that can take any non-negative integer as an argument and
return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.

Examples:
Input: 42145 Output: 54421

Input: 145263 Output: 654321

Input: 123456789 Output: 987654321
"""


def descending_order(num):
    if num == 0:
        return 0

    num = [int(x) for x in str(num)]
    data = ""

    n = len(num)

    while len(data) != n:
        highest = 0
        highestIndex = 0
        index = 0
        for x in num:
            if x > highest:
                highest = x
                highestIndex = index

            index += 1

        data += str(highest)
        del num[highestIndex]

    return int(data)


print(f"Expected 0          | Actual: {descending_order(0)}")
print(f"Expected 51         | Actual: {descending_order(15)}")
print(f"Expected 987654321  | Actual: {descending_order(123456789)}")
