def carParking(n, available)


end

fp = File.open(ENV['OUTPUT_PATH'], 'w')


_n = Integer(gets);


_available_rows = 0
_available_cols = 0
_available_rows = Integer(gets)
_available_cols = Integer(gets)
_available = Array.new(_available_rows)
for _available_i in (0.._available_rows-1)
  _available_t = gets.strip
  _available[_available_i] = _available_t.split(' ').map(&:to_i)
end

res = carParking(_n, _available);
for res_i in res do
  fp.write res_i
  fp.write "\n"
end

fp.close()
