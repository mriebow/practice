Rails.application.routes.draw do
  root to: 'houses#index'

  resources :houses, only: [:new, :create, :show, :index]
  resources :members, only: [:new, :create]
end
