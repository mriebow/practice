class House < ApplicationRecord
  validates :name, presence: true
  validates :author, presence: true
  validates :source, presence: true
  validates :motto, presence: true
end
