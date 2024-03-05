class Solution(object):
    def twoSum(self, nums, target):
        """
        :type nums: List[int]
        :type target: int
        :rtype: List[int]
        """
        numLen = len(nums)
        for x in range(numLen):
            for y in range(numLen):
                if x != y and (nums[x] + nums[y]) == target:
                    return [x, y]
        return []


obj = Solution()
print(obj.twoSum([2, 7, 11, 15], 9))
