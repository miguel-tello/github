import gym
import gym_utad
from keras import models
import numpy as np
import tensorflow as tf

EPISODES = 10  # TODO Modificar si es necesario para estudiar si el agente aprende


class QNAgent:
    def __init__(self, state_size, action_size):
        '''
        states_size         número total de estados
        actions_size        número total de acciones posibles
        '''
        self.state_size = state_size
        self.action_size = action_size
        self.model = models.Sequential()  # Aqui se debe almacenar el modelo keras

    def act(self, state):
        '''
        A partir del estado actual state devuelve la acción adecuada
        sate                estado actual
        '''
        # TODO
        # Soy tontito, tomo decisiones al azar
        # return np.random.randint(0, 2)

        decision = self.model.predict(state)

        return decision

    def learn(self):  # TODO Añadir los arugmentos necesarios si los hay
        '''
        Proceso de aprendizaje por refuerzo con Q learning y redes neuronales
        '''
        # TODO
        self.model.fit()

    def memorize(self):  # TODO Añadir los arugmentos necesarios
        '''
        Memoriza la experiencia obtenida para poder recordarlo más adelante y reforzar el conocimiento
        '''
        # TODO

    def load(self, file_name):
        '''
        Carga en el modelo los pesos almacenados en un fichero
        file_name           nombre del archivo (y path) que almacena los pesos
        '''
        self.model.load_weights(file_name)

    def save(self, file_name):
        '''
        Guarda los pesos del modelo en un fichero
        file_name           nombre del archivo (y path) que almacena los pesos
        '''
        self.model.save_weights(file_name)

    # TODO Añadir las funciones necesarias


if __name__ == "__main__":
    env = gym.make('EasyMountainCarEnv-v0')
    state_size = env.observation_space.shape[0]
    action_size = env.action_space.n
    agent = QNAgent(state_size, action_size)

    done = False

    for e in range(EPISODES):
        acu_rew = 0
        state = env.reset()
        state = np.reshape(state,
                           [1, state_size])  # Modifica la forma de la matriz estado para poder trabajar con una QN

        for step in range(200):
            env.render()  # Comentar para evitar que se visualice la simulacion
            action = agent.act(state)
            state, reward, done, _ = env.step(action)
            acu_rew += reward

            if done:
                print("Episodio: {}, Pasos: {}, Recompensa acumulada: {}".format(e, step, acu_rew))
                break
    env.close()