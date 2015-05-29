require 'spec_helper'

describe Fixnum do
  describe '#fizzable?' do
    it 'is fizzable if divisible by 3' do
      expect(3).to be_fizzable
      expect(6).to be_fizzable
      expect(72).to be_fizzable
    end

    it 'is not fizzible if not divisible by 3' do
      expect(1).not_to be_fizzable
      expect(2).not_to be_fizzable
      expect(5).not_to be_fizzable
    end
  end

  describe '#buzzable?' do
    it 'is buzzable if divisible by 5' do
      expect(5).to be_buzzable
      expect(10).to be_buzzable
      expect(15).to be_buzzable
    end

    it 'is not buzzable if not divisible by 5' do
      expect(3).not_to be_buzzable
      expect(19).not_to be_buzzable
      expect(72).not_to be_buzzable
    end
  end

  describe '#to_fizzbuzz' do
    context 'when not fizzable or buzzable' do
      it 'returns the number as a string' do
        expect(8.to_fizzbuzz).to eq('8')
      end
    end

    context 'when only fizzable' do
      it 'returns "Fizz"' do
        expect(21.to_fizzbuzz).to eq 'Fizz'
      end
    end

    context 'when only buzzable' do
      it 'returns "Buzz"' do
        expect(25.to_fizzbuzz).to eq 'Buzz'
      end
    end

    context 'when both fizzable and buzzable' do
      it 'returns "FizzBuzz"' do
        expect(30.to_fizzbuzz).to eq 'FizzBuzz'
      end
    end
  end
end
