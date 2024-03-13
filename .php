<?php
def find_max_min(a, b, c):
    max_num = max(a, b, c)
    min_num = min(a, b, c)
    return max_num, min_num

num1 = float(input("Введите первое число: "))
num2 = float(input("Введите второе число: "))
num3 = float(input("Введите третье число: "))

max_num, min_num = find_max_min(num1, num2, num3)

print(f"Наибольшее число: {max_num}")
print(f"Наименьшее число: {min_num}")
?>