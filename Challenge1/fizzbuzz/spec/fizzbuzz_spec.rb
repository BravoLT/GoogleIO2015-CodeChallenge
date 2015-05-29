require 'spec_helper'
require 'fizzbuzz'

describe Fizzbuzz do
  it 'has a version number' do
    expect(Fizzbuzz::VERSION).not_to be nil
  end

  it 'adds the fizzbuzz method to Fixnum' do
    expect(2342).to respond_to :fizzbuzz
  end
end
