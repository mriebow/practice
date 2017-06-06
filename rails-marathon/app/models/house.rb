class House < ApplicationRecord
  validates :name, presence: true
  validates :author, presence: true
  validates :source, presence: true

  has_many :members
end
