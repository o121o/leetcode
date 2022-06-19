class Solution:

    def multiply(self, num1: str, num2: str) -> str:
        result = 0
        for i1, v1 in  enumerate(num1[::-1]):
            for i2, v2 in  enumerate(num2[::-1]):
                result += int(v1) * int(v2) * (10**(i1+i2))
        return str(result)
