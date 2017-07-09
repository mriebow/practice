
string = "bad"
string1 = "dab"

arr1 = string.split('')
arr2 = string1.split('')

i = 0
while i < arr1.size
  if arr1.include?(arr2[i])
     i+=1
  else
    break
   end
end

if i == arr1.size
  puts 1
else
  puts 0
end
