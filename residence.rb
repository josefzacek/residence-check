puts 'Input number of days for year 2014'
year14 = gets.chomp.to_i

puts 'Input number of days for year 2013'
year13 = gets.chomp.to_i

puts 'Input number of days for year 2012'
year12 = gets.chomp.to_i

puts 'Input number of days for year 2011'
year11 = gets.chomp.to_i

puts 'Input number of days for year 2010'
year10 = gets.chomp.to_i

total = year14 + year13 + year12 + year11 + year10

puts "You have provided following details:
    Year 2014 = #{year14} days
    Year 2013 = #{year13} days
    Year 2012 = #{year12} days
    Year 2011 = #{year11} days
    Year 2010 = #{year10} days
    -------------
    Total days = #{total}"



# if 2014 > 183 => resident  else not resident
# if 2014 + 2013 > 280 => resident  else not resident
# if 2011/2012/2013 => resident => ordinary resident


#check if resident each year
if year14 < 183
  puts 'You are NOT resident in tax year 2014'
else
  puts 'You are resident in tax year 2014'
end

if year13 < 183
  puts 'You were NOT resident in tax year 2013'
else
  puts 'You were resident in tax year 2013'
end

if year12 < 183
  puts 'You were NOT resident in tax year 2012'
else
  puts 'You were resident in tax year 2012'
end

if year11 < 183
  puts 'You were NOT resident in tax year 2011'
else
  puts 'You were resident in tax year 2011'
end

if year10 < 183
  puts 'You were NOT resident in tax year 2010'
else
  puts 'You were resident in tax year 2010'
end

# check if resident in 2014 and 2013
if year13 + year14 < 280
  puts 'You are NOT resident in tax years 2013/2014'
else
  puts 'You are resident in tax years 2013/2014'
end

# check ordinary resident
if year11 > 183 and year12 > 183 and year13 > 183
  puts 'You are ordinary resident'
else
  puts 'You haven\'t been resident in 2011/ 2012/ 2013 therefore you are NOT ordinary resident'
end


