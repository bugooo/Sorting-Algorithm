# 十大排序算法
##### [冒泡排序（Bubble Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/bubble_sort.php)
每次冒泡操作都会对相邻的两个元素进行比较，看是否满足大小关系要求，如果不满足就让它俩互换。
##### [归并排序（Merge Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/merge_sort.php)
* 把长度为n的输入序列分成两个长度为n/2的子序列
* 对这两个子序列分别采用归并排序
* 将两个排序好的子序列合并成一个最终的排序序列
##### [选择排序（Selection Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/selection_sort.php)
从未排序区间中找到最小元素，放入已排序区间末尾
##### [插入排序（Insertion Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/insertion_sort.php) 
* 将数组中数据分两个区间,已排序区和未排序区
* 取未排序去中的元素在已排序区间中找到合适的插入位置将其插入
* 重复直到未排序区间中的元素为空，算法结束
##### [希尔排序（Shell Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/shell_sort.php) 
* 将数组中数据依次按照增量序列{n/2,(n/2)/2...1}分组
* 将每次按照增量分组的数组插入排序 
* 重复直到增量为1

例如数组$arr = [8,9,1,7,2,3,4,5,6,0]
1. 第一次分组增量为gap = length/2=10/2=5，则将数组分成5组 [$arr[0],$arr[5]],[$arr[1],$arr[6]],[$arr[2],$arr[7]],[$arr[3],$arr[8]],[$arr[4],$arr[9]],对这五组数据分别进行插入排序
2.第二次分组增量为gap = gap/2=5/2=2，将数组分成两组，每组五个数据[$arr[0],$arr[2],$arr[4],$arr[6],$arr[8]],[$arr[1],$arr[3],$arr[5],$arr[7],$arr[9]],对这两组数据分别进行插入排序
3.第三次分组增量为 gap=gap/2=2/2=1，对前面排完序后的[$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9]]进行插入排序

##### [快速排序（Quick Sort）](https://github.com/bugooo/Sorting-Algorithm/blob/master/quick_sort.php) 
* 从数列中挑出一个元素，称为 “基准”（pivot）；
* 重新排序数列，所有元素比基准值小的摆放在基准前面，所有元素比基准值大的摆在基准的后面（相同的数可以到任一边）。在这个分区退出之后，该基准就处于数列的中间位置。这个称为分区（partition）操作；
* 递归地（recursive）把小于基准值元素的子数列和大于基准值元素的子数列排序。

