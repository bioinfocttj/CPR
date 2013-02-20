/*
 * =============================================================================
 * Simplified BSD License, see http://www.opensource.org/licenses/
 * -----------------------------------------------------------------------------
 * Copyright (c) 2008-2009, Marco Terzer, Zurich, Switzerland
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 * 
 *     * Redistributions of source code must retain the above copyright notice, 
 *       this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright 
 *       notice, this list of conditions and the following disclaimer in the 
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the Swiss Federal Institute of Technology Zurich 
 *       nor the names of its contributors may be used to endorse or promote 
 *       products derived from this software without specific prior written 
 *       permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 * =============================================================================
 */
package ch.javasoft.metabolic.efm.impl;

import java.util.logging.Level;
import java.util.logging.Logger;

import ch.javasoft.metabolic.MetabolicNetwork;
import ch.javasoft.metabolic.util.Output;
import ch.javasoft.util.logging.Loggers;

/*package*/ class LogPkg {

	public static final Logger LOGGER = Loggers.getLogger(LogPkg.class, -2);

	/**
	 * Logs metabolites and reactions using the specified log level. Metabolites
	 * are logged on a single line, reactions use one line per reaction. For
	 * reactions, name and formula is printed.
	 */
	public static void logNetwork(MetabolicNetwork net, Level level) {
		if (LOGGER.isLoggable(level)) {
			LOGGER.log(level, "Network metabolites: ");
			new Output(LOGGER, level).printMetabolites(net, false /*sort*/, false /*newLineAfterMetabolite*/);
			LOGGER.log(level, "Network reactions: ");
			new Output(LOGGER, level).printReactions(net, false /*sort*/, true /*newLineAfterReactions*/);
		}
	}

	/**
	 * Logs network size using the specified log level. The statement is 
	 * prefixed with the specified string.
	 */
	public static void logNetworkSize(String prefix, MetabolicNetwork net, Level level) {
		new Output(LOGGER, level).printNetworkSize(prefix, net);
	}

	/**
	 * Logs network size using INFO log level. The statement is 
	 * prefixed with the specified string.
	 */
	public static void infoNetworkSize(String prefix, MetabolicNetwork net) {
		logNetworkSize(prefix, net, Level.INFO);
	}
	
	//no instances
	private LogPkg() {
		super();
	}

}
